<?php


function dd($data)
{
    echo '<pre>';
    print_r(var_dump($data));
    echo '</pre>';
    die();
}

function app(){
    return \Nrngajurel\Sl\Application::$app;
}
function db(){
    return \Nrngajurel\Sl\Application::$app->db;
}

function get_header(){
    require_once __DIR__.'/../../public/layouts/header.php';
}

function get_footer(){
    require_once __DIR__.'/../../public/layouts/footer.php';
}