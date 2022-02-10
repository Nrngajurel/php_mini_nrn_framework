<?php

namespace Nrngajurel\Sl\Controllers;

use Nrngajurel\Sl\Auth\Auth;
use Nrngajurel\Sl\Models\User;

class UserController
{
    public function usersAll(){
        $users = new User();
        return $users->all(['id', 'name', 'email']);
    }

    public function create(array $data){
        $data = [
            'name' =>$data['name'],
            'email' =>$data['email'],
            'password' =>$data['password'],
        ];
        $user = new User();
        return $user->create($data);
    }

    public function register(array $data){
        $user = $this->create($data);
        Auth::login($user);
        header('Location: /dashboard');
    }
    public function login(array $data){
        $data = [
            'email' =>$data['email'],
            'password' =>$data['password'],
        ];
        $user = new User();
        $user = $user->isRegistered($data['email'],$data['password']);
        if($user){
            Auth::login($user);
            header('Location: /dashboard');
        }else{
            header('Location: /login');
        }
    }

    public static function delete($id)
    {
        $user = new User();
        return $user->delete($id);
    }

}