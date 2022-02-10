<?php

namespace Nrngajurel\Sl\HtmlComponent;

class Form
{
    public static function open($action = '/', $method = 'post', $autocomplete='off' , $enctype = '')
    {
        echo "<form  action='{$action}' method='{$method}' autocomplete='{$autocomplete}' enctype='{$enctype}'>";
    }
    public static function close()
    {
        echo '</form>';
    }
    public static function label($for, $text, $class = '')
    {
        echo "<label for='{$for}' class='pt-5 {$class}'>{$text}</label>";
    }
    public static function input($type ='text', $name = '', $value = '', $placeholder = '', $class = '', $id = '', $required = false){
        echo '<input type="'.$type.'" name="'.$name.'" value="'.$value.'" placeholder="'.$placeholder.'" class="px-5 py-2 bg-gray-300 rounded w-full '.$class.'" id="'.$id.'" required='.$required.'/>';
    }
    public static function submit(string $value = '',  $type ='primary',string $class = '', string $id = ''){
        switch ($type){
            case 'primary':
                $class.= " bg-blue-500 hover:bg-blue-700";
                break;
            case 'secondary':
                $class.= " bg-gray-500 hover:bg-gray-700";
                break;
        }
        echo '<input type="submit" value="'.$value.'" class="px-10 py-2 text-white mt-5 rounded '.$class.'" id="'.$id.'"/>';
    }

}