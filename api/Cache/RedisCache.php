<?php

class RedisCache
{
    private $redis;
    
    public function __construct($host = '127.0.0.1', $port = 6379, $db = 0, $password = null)
    {
        if (extension_loaded('redis')) {
            $this->redis = new Redis();
            try {
                if ($this->redis->connect($host, $port)) {
                    if ($password) {
                        $this->redis->auth($password);
                    }
                    if ($db) {
                        $this->redis->select($db);
                    }
                } else {
                    $this->redis = null;
                }
            } catch (Exception $e) {
                $this->redis = null;
            }
        }
    }
    
    public function isConnected()
    {
        return $this->redis !== null;
    }

    public function get($key)
    {
        if (!$this->redis) return false;
        $value = $this->redis->get($key);
        return $value !== false ? unserialize($value) : false;
    }
    
    public function set($key, $value, $ttl = 3600)
    {
        if (!$this->redis) return;
        $this->redis->setex($key, $ttl, serialize($value));
    }
    
    public function delete($key)
    {
        if (!$this->redis) return;
        if (strpos($key, '*') !== false) {
            $keys = $this->redis->keys($key);
            if (!empty($keys)) {
                foreach ($keys as $k) {
                    $this->redis->del($k);
                }
            }
        } else {
            $this->redis->del($key);
        }
    }
    
    public function flush()
    {
        if (!$this->redis) return;
        $this->redis->flushDB();
    }
}
