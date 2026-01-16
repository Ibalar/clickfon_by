<?php

class MemcacheCache
{
    private $mem;
    private $isMemcached;
    
    public function __construct($host = '127.0.0.1', $port = 11211, $useMemcached = false)
    {
        $this->isMemcached = $useMemcached;
        if ($this->isMemcached && extension_loaded('memcached')) {
            $this->mem = new Memcached();
            $this->mem->addServer($host, $port);
        } elseif (extension_loaded('memcache')) {
            $this->mem = new Memcache();
            $this->mem->addServer($host, $port);
        }
    }
    
    public function isConnected()
    {
        return $this->mem !== null;
    }

    public function get($key)
    {
        if (!$this->mem) return false;
        $result = $this->mem->get($key);
        return !empty($result) ? $result : false;
    }
    
    public function set($key, $value, $ttl = 3600)
    {
        if (!$this->mem) return;
        if ($this->isMemcached) {
            $this->mem->set($key, $value, $ttl);
        } else {
            $this->mem->set($key, $value, 0, $ttl);
        }
    }
    
    public function delete($key)
    {
        if (!$this->mem) return;
        // Memcache doesn't support wildcards. 
        // We just delete the exact key.
        if (strpos($key, '*') === false) {
            $this->mem->delete($key);
        }
    }
    
    public function flush()
    {
        if (!$this->mem) return;
        $this->mem->flush();
    }
}
