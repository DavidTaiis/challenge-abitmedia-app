<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    public function findById($id)
    {
        return User::query()->find($id);
    }

    public function getUser($email)
    {
        $user = User::query()
            ->where('email', $email)
            ->first();

        return $user ?? null;
    }
    public function register($input)
    {
       
       $user = new User();
       $user->name =  $input["name"];
       $user->email =  $input["email"];
       if (isset($input['password'])) {
        $user->password = bcrypt($input['password']);
        }   
        $user->save();
    }

}
