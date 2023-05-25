<?php
// Load Config
require_once 'config/config.php';

function webprog_mvc($calassName){
    require_once 'libraries/'. $calassName .'.php';
}

spl_autoload_register('webprog_mvc');