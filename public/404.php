<?php

get_header();

\Nrngajurel\Sl\HtmlComponent\Html::container_init('flex flex-col items-center justify-center min-h-screen');
echo '<h1 class="text-2xl">404 Not Found</h1>';
\Nrngajurel\Sl\HtmlComponent\Html::container_end();

get_footer();