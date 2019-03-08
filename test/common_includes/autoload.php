<?php
spl_autoload_register(function($class){
    $filename = $_SERVER['DOCUMENT_ROOT'].'/freelancer/php_classes/'.$class.'.php';
    if(!file_exists($filename)){
        die($filename." does not exist");
    }
    include($filename);
});
?>