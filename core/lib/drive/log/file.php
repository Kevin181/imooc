<?php
namespace core\lib\drive\log;

use core\lib\conf;

class File
{
    public $path;

    public function __construct()
    {
        $conf = conf::get('OPTION', 'log');
        $this->path = $conf['PATH'];
    }

    public function log($message, $file = 'log')
    {
        if (!is_dir($this->path.date('Ymd'))) {
            mkdir($this->path.date('Ymd'), '0777', true);
        }

        return file_put_contents($this->path.date('Ymd').'/'.date('H').$file.'.php', date('Y-m-d H:i:s').'  '.json_encode($message).PHP_EOL, FILE_APPEND);
    }
}