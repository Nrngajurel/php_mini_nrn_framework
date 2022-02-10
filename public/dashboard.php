<?php

use Nrngajurel\Sl\HtmlComponent\Form;
use Nrngajurel\Sl\HtmlComponent\Html;

$users = new \Nrngajurel\Sl\Controllers\UserController();
$users = $users->usersAll();
//dd($users);
get_header();

Html::container_init('bg-gray-300 min-h-screen py-10 px-48');
    Html::table_init('px-32 w-full');
        Html::table_head([
            '#',
            'Name',
            'Email',
            'Action'
        ]);
        foreach($users as $user) {
            Html::table_row([
                $user['id'],
                $user['name'],
                $user['email'],
                "<a href='/edituser?id={$user['id']}' class='text-green-700 text-sm bg-green-200 rounded-full px-2 py-1 mr-2'> Edit </a> | <a href='/deleteuser?id={$user['id']}' class='text-red-600 text-sm bg-red-200 rounded-full px-2 py-1 ml-2'>Delete</a>"
            ]);
        }

    Html::table_end();
Html::container_end();
get_footer();