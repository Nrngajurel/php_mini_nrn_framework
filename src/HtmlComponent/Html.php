<?php

namespace Nrngajurel\Sl\HtmlComponent;

class Html
{
    public static function container_init($class=''){
        echo '<div class="'.$class.'">';
    }
    public static function container_end(){
        echo '</div>';
    }
    public static function text($text, $class=''){
        echo '<span class='.$class.'>'.$text.'</span>';
    }
    public static function paragraph($text, $class = null){
        echo "<p class='{$class}'>{$text}</p>";
    }

    public static function anchor($text='link', $href='/', $class = ''){
        echo "<a href='{$href}' class='{$class}'>{$text}</a>";
    }

    //table

    public static function table_init($class=''){
        echo '<table class="table-auto rounded-lg '.$class.'">';
    }
    public static function table_end(){
        echo '</table>';
    }
    public static function table_head(array $column, $class=''){
        echo '<thead class="'.$class.'">';
        echo '<tr>';
        foreach($column as $col){
            echo '<th class="bg-gray-600 text-white rounded px-6 py-2">'.$col.'</th>';
        }
        echo '</tr>';
        echo '</thead>';
    }
    public static function table_row(array $row, $class=''){
        echo '<tr class="'.$class.'">';
        foreach($row as $col){
            echo '<td class="bg-gray-200 rounded px-4 py-2">'.$col.'</td>';
        }
        echo '</tr>';
    }

}