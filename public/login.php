<?php

use Nrngajurel\Sl\Controllers\UserController;
use Nrngajurel\Sl\HtmlComponent\Form;
use Nrngajurel\Sl\HtmlComponent\Html;

if (strtolower($_SERVER['REQUEST_METHOD']) =='post'){
    $userController = new UserController();
    $user = $userController->login($_POST);
    return;
}

get_header();

Html::container_init('bg-gray-300 flex flex-col items-center justify-center h-screen w-full');
Form::open('/login', 'POST', 'my-5 w-full');
Html::container_init('flex flex-col items-left m-10 p-10 bg-white rounded shadow-lg text-gray-600 font-semibold w-full');
Form::label('email', 'Email');
Form::input('email', 'email', '', 'Email' );
Form::label('password', 'Password');
Form::input('password', 'password', '', 'Password');
Form::submit('Login', 'primary');
Html::container_end();
Form::close();
Html::container_end();
get_footer();