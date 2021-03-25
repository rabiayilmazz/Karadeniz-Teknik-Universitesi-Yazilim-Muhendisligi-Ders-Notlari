<?php

function autoloadController($className)
{
    $classFile = __DIR__ . '/app/controller/' . strtolower($className) . '.php';
    if (file_exists($classFile)){
        require $classFile;
    }
}
function autoloadHelper($className)
{
    $classFile = __DIR__ . '/app/helper/' . strtolower($className) . '.php';
    if (file_exists($classFile)){
        require $classFile;
    }
}
function autoloadClass($className){
    $className = strtolower(str_replace('\\', '/', $className)) . '.php';
    require $className;
}
//spl_autoload_register('autoloadController');
//spl_autoload_register('autoloadHelper');
spl_autoload_register('autoloadClass');

$home = new App\Controller\Home;
//echo $home->test();

$test = new App\Helper\Test;