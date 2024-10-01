<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show(string $id)
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

    public function edit(string $id, Request $request)
    {
        $user = User::findOrFail($id);

        $data = $request->only(
            [
                'username',
                'name',
                'surname',
                'patronymic',
                'phoneNumber',
                'email',
            ]);

        foreach($data as $val => $key)
        {
            if ($key != '')
            {
                $user->update([$val => $key]);
            }
        }

        return redirect('/users');
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
