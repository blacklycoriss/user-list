<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexPage()
    {
        return view('index', ['title' => 'Главная']);
    }
    public function allUsers()
    {
        $users = User::all();

        return view('users',
            [
                'title' => 'Все пользователи',
                'users' => $users,
            ]);
    }
    public function createPage()
    {
        return view('create', ['title' => 'Новый пользователь']);
    }
    public function editPage(string $id)
    {
        $user = User::find($id);
        return view('edit', ['title' => 'Пользователь', 'user' => $user]);
    }
}
