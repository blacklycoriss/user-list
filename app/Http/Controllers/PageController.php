<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function allUsers()
    {
        $users = User::all();

        return view('users',
            [
                'title' => 'Все пользователи',
                'users' => $users,
            ]);
    }
}
