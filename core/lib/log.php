<?php
namespace core\lib;

class Log
{
	public static $class;

    public static function init()
	{
        $drive = conf::get('DRIVE', 'log');
        $class = '\core\lib\drive\log\\'.$drive;
        self::$class = new $class;
	}

    public static function log($message, $file = 'log')
    {
        self::$class->log($message, $file);
    }
}