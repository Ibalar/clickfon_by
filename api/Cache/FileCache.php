<?php

class FileCache
{
    private $cacheDir;
    
    public function __construct($cacheDir = null)
    {
        $this->cacheDir = $cacheDir ?: dirname(dirname(__DIR__)) . '/compiled/cache';
        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0755, true);
        }
    }
    
    public function get($key)
    {
        $file = $this->getFilePath($key);
        if (!file_exists($file)) {
            return false;
        }
        
        $content = file_get_contents($file);
        $data = unserialize($content);
        
        if (!$data || !isset($data['expires']) || !isset($data['value'])) {
            return false;
        }

        // Проверка TTL
        if ($data['expires'] < time()) {
            @unlink($file);
            return false;
        }
        
        return $data['value'];
    }
    
    public function set($key, $value, $ttl = 3600)
    {
        $file = $this->getFilePath($key);
        $data = [
            'key' => $key,
            'value' => $value,
            'expires' => time() + $ttl,
        ];
        
        file_put_contents($file, serialize($data));
    }
    
    public function delete($key)
    {
        if (strpos($key, '*') !== false) {
            $pattern = str_replace('*', '.*', preg_quote($key));
            $files = glob($this->cacheDir . '/*.cache');
            foreach ($files as $file) {
                $content = file_get_contents($file);
                $data = @unserialize($content);
                if ($data && isset($data['key']) && preg_match('/^' . $pattern . '$/', $data['key'])) {
                    @unlink($file);
                }
            }
        } else {
            $file = $this->getFilePath($key);
            if (file_exists($file)) {
                @unlink($file);
            }
        }
    }
    
    public function flush()
    {
        // Удалить все файлы кэша
        $files = glob($this->cacheDir . '/*.cache');
        foreach ($files as $file) {
            if (is_file($file)) {
                @unlink($file);
            }
        }
    }

    private function getFilePath($key)
    {
        return $this->cacheDir . '/' . md5($key) . '.cache';
    }
}
