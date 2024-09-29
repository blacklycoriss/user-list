<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all()
    {
        $users = User::all();
        dd($users);
    }

    public function show($id)
    {
        $user = User::find($id);
        dd($user);
    }

    public function create()
    {
        $user = [
            'username' => 'alexCool228',
            'name' => 'Alex',
            'surname' => 'Dubrovskiy',
            'patronymic' => 'Dimich',
            'phoneNumber' => '7 (999) 999-99-99',
            'email' => 'aaaaaa@gmail.com',
        ];
        $user = User::insert($user);
        dump($user);
        dd('user created');
    }
}
