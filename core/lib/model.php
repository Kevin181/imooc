<?php
namespace core\lib;

use \core\lib\conf;

class Model extends \Medoo\Medoo
{
    public function __construct()
    {

        $options = conf::all('database');
        parent::__construct($options);
    }
}