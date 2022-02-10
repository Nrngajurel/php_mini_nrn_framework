<?php

use Nrngajurel\Sl\Controllers\UserController;
use Nrngajurel\Sl\HtmlComponent\Form;
use Nrngajurel\Sl\HtmlComponent\Html;

if (strtolower($_SERVER['REQUEST_METHOD']) =='post'){
    $userController = new UserController();
    $user = $userController->register($_POST);

    return;
}
//dd(\Nrngajurel\Sl\Auth\Auth::user());
get_header();

Html::container_init('bg-gray-300 flex flex-col items-center justify-center h-screen w-full');
    Form::open('/register', 'POST', 'my-5 w-full');
        Html::container_init('flex flex-col items-left m-10 p-10 bg-white rounded shadow-lg text-gray-600 font-semibold w-full');
            Form::label('name', 'Name');
            Form::input('text', 'name', '', 'Name' );
            Form::label('email', 'Email');
            Form::input('email', 'email', '', 'Email' );
            Form::label('password', 'Password');
            Form::input('password', 'password', '', 'Password');
            Form::label('confirm_password', 'Confirm Password');
            Form::input('password', 'confirm_password', '', 'Confirm Password' );
            Form::submit('Login', 'primary');
        Html::container_end();
    Form::close();
Html::container_end();
get_footer();