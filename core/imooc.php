<?php

namespace core;

class Imooc
{
    public static $classMap = array();

    public $assign;

    public static function run()
    {
      \core\lib\log::init();
      \core\lib\log::log($_SERVER);
      $route = new \core\lib\route();
      $ctrlClass = $route->ctrl;
      $action = $route->action;
      $ctrlFile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
      $cltrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
      if (is_file($ctrlFile)) {
      include $ctrlFile;
      $ctrl = new $cltrlClass();
      $ctrl->$action();
      \core\lib\log::log('ctrl:'.$ctrlClass.'    '.'action'.$action);
      } else {
        throw new \Exception('找不到控制器'.$ctrlClass);
      }
    }

    public static function load($class)
    {
      // autoload classes
      //  new \core\route();
      //  $class = '\core\route';
      //  IMOOC.'/core/route.php';
      
      if (isset($classMap[$class])) {
        return true;
      } else {
        $class = str_replace('\\', '/', $class);
        $file = IMOOC.'/'.$class.'.php';
        if (is_file($file)) {
          include $file;
          self::$classMap[$class] = $class;
        } else {
          return false;
        }
      }

    }

    public function assign($name, $value)
    {
      $this->assign[$name] = $value;
    }

    public function display($file)
    {
      //   $file = APP.'/views/'.$file;
      //   if (is_file($file)) {
      //   extract($this->assign);
      //   include $file;
      // }
	  $temp = $file;
      $file = APP.'/views/'.$file;
      if (is_file($file)) {

        $loader = new \Twig_Loader_Filesystem(APP.'/views');
        $twig = new \Twig_Environment($loader, array(
            'cache' => IMOOC.'/log/twig',
            'debug' => true,
        ));
        $template = $twig->loadTemplate($temp);
        $template->display($this->assign?$this->assign:array());
      }
    }

}