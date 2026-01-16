<?php

require_once 'Turbo.php';
require_once 'Cache/FileCache.php';
require_once 'Cache/RedisCache.php';
require_once 'Cache/MemcacheCache.php';

class Cache extends Turbo
{
    private $backend;
    private $cacheTTL = [
        'categories' => 3600,           // 1 час
        'brands' => 3600,               // 1 час
        'features' => 3600,             // 1 час
        'products_list' => 600,         // 10 минут (часто меняется)
        'product_detail' => 1800,       // 30 минут
        'filters' => 3600,              // 1 час
        'settings' => 86400,            // 1 день
        'pages' => 86400,               // 1 день
        'default' => 3600,
    ];

    public function __construct()
    {
        parent::__construct();
        $this->init();
    }

    public function init()
    {
        $type = $this->config->cache_type ?: $this->settings->cache_type;
        
        // Priority: Redis > Memcache > File
        if ($type == 'redis' && extension_loaded('redis')) {
            $this->backend = new RedisCache(
                $this->config->redis_host ?? '127.0.0.1',
                $this->config->redis_port ?? 6379,
                $this->config->redis_db ?? 0,
                $this->config->redis_password ?? null
            );
            if (!$this->backend->isConnected()) {
                $this->backend = null;
            }
        }

        if (!$this->backend && ($type == 'memcache' || $type == 'memcached' || $this->settings->cache_type == 1 || empty($type))) {
            if (extension_loaded('memcached') || extension_loaded('memcache')) {
                $this->backend = new MemcacheCache(
                    $this->config->memcache_host ?? '127.0.0.1',
                    $this->config->memcache_port ?? 11211,
                    ($type == 'memcached' || $this->settings->cache_type == 1)
                );
                if (!$this->backend->isConnected()) {
                    $this->backend = null;
                }
            }
        }

        if (!$this->backend) {
            $this->backend = new FileCache(
                $this->config->cache_file_dir ?? dirname(__DIR__) . '/compiled/cache'
            );
        }
    }

    public function get($key)
    {
        return $this->backend->get($this->stringToKey($key));
    }

    public function set($key, $value, $type = 'default')
    {
        $ttl = $this->cacheTTL[$type] ?? $this->cacheTTL['default'];
        if ($this->settings->cache_time > 0 && $type == 'default') {
             $ttl = $this->settings->cache_time;
        }
        $this->backend->set($this->stringToKey($key), $value, $ttl);
    }

    public function delete($key)
    {
        $this->backend->delete($this->stringToKey($key));
    }
    
    public function del($key)
    {
        $this->delete($key);
    }

    public function clearall()
    {
        $this->backend->flush();
    }

    private function stringToKey($key)
    {
        $prefix = md5($this->config->root_url);
        return $prefix . ':' . $key;
    }
}
