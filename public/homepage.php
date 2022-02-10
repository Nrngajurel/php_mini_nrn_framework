<?php

use Nrngajurel\Sl\HtmlComponent\Form;
use Nrngajurel\Sl\HtmlComponent\Html;

get_header();

Html::container_init('bg-gray-300 flex flex-col items-center justify-center h-screen');
    Html::text('Nrn User Management System','text-center text-2xl font-bold text-gray-800');
    if (\Nrngajurel\Sl\Auth\Auth::isLoggedIn()){
        Html::text("You are logged in as <span class='px-5 text-blue-500'>".\Nrngajurel\Sl\Auth\Auth::user()['name']."</span>",'text-center text-2xl font-bold text-gray-800 mt-5');
    }
Html::container_end();
get_footer();
