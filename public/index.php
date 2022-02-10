<?php

require_once '../vendor/autoload.php';

$app = new \Nrngajurel\Sl\Application();

if($_SERVER['REQUEST_URI'] == '/') {
    require_once './homepage.php';
} else {
    if((strpos(str_replace('/', '', $_SERVER['REQUEST_URI']),'?'))) {
        $uri = explode('?', $_SERVER['REQUEST_URI'])[0];
    } else {
        $uri = strtolower($_SERVER['REQUEST_URI']);
    }
    if (file_exists('.'.$uri.'.php')) {
        require_once '.'.$uri.'.php';
    } else {
        require_once './404.php';
    }
}

