<?php

use Nrngajurel\Sl\HtmlComponent\Form;
use Nrngajurel\Sl\HtmlComponent\Html;

\Nrngajurel\Sl\Auth\Auth::logout();
get_header();

Html::container_init('bg-gray-300 flex flex-col items-center justify-center h-screen');
echo "Logout Page";
Html::anchor('Homepage >>','/' , 'text-blue-500 hover:text-blue-700 mt-5');
get_footer();