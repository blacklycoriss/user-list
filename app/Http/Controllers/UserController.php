<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function all()
    {
        $users = User::all();

        return view('users',
            [
                'title' => 'Все пользователи',
                'users' => $users,
            ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        dd($user);
    }

    public function create(Request $request)
    {
        $user = [
            'username' => $request->get('username'),
            'name' => $request->get('name'),
            'surname' => $request->get('surname'),
            'patronymic' => $request->get('patronymic'),
            'phoneNumber' => $request->get('phoneNumber'),
            'email' => $request->get('email'),
        ];

        User::create($user);
        return redirect('/users');
    }

    public function edit($id)
    {
        $user = User::find($id);

        $user->username = 'alexAAA';

        $user->save();
        dd('edited');
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();
        dd('deleted');
    }

    public function restore($id)
    {
        $users = User::withTrashed()->get();
        dump($users);

        foreach($users as $user)
        {
            if ($user->id == $id)
            {
                $user->restore();
                break;
            }
        }
        dd('restored user ' . $id);
    }
}
