<?php

use Nrngajurel\Sl\HtmlComponent\Html;

?>
    <!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title??'Nrn User Management System'  ?></title>
</head>
<body>
    <?php
        Html::container_init('flex justify-between items-center px-10 py-4 bg-gray-200');
            Html::container_init();
                Html::anchor('Nrn User Management System', '/', 'text-xl font-bold text-gray-700');
            Html::container_end();

            Html::container_init();
            if (\Nrngajurel\Sl\Auth\Auth::isLoggedIn()){
                Html::anchor('Dashboard', '/dashboard');
                Html::anchor('Logout', '/logout', 'pl-4');
            }else{
                Html::anchor('Login','/login', );
                Html::anchor('Register','/register', 'pl-4');
            }
            Html::container_end();
        Html::container_end();