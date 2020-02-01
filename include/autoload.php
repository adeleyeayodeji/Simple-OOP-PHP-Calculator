<?php
  spl_autoload_register("myautoload");

  function myautoload($class)
  {
    $path = "class/";
    $classname = $class;
    $extention = ".php";
    $fullpath = $path.$classname.$extention;

    include $fullpath;
  }


 ?>
