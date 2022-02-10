<?php

namespace Nrngajurel\Sl\Auth;

class Auth
{

    public static function login(bool|array|null $user)
    {
        if ($user){
            $_SESSION['user'] = $user;
            return true;
        }
    }
    public static function logout()
    {
        if (!isset($_SESSION['user'])){
            header('Location: /login');
        }
        unset($_SESSION['user']);
        return true;
    }
    public static function isLoggedIn()
    {
        return isset($_SESSION['user']);
    }
    public static function user()
    {
        return $_SESSION['user']?? null;
    }
    public static function check(){
        if (!self::isLoggedIn()){
            header('Location: /login');
            exit;
        }
    }
}