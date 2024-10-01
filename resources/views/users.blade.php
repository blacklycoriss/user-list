@extends('layouts.layout')
@section('content')
    <h3>Все пользователи сайта</h3>
    <p><a href="/users/create">Создать нового пользователя</a></p>
    <p>Имя | Электронная почта</p>
    @foreach($users as $user)
        <li>{{ $user->name . ' | ' . $user->email}}</li>
        {{ html()->form('GET', '/users/'. $user->id .'/edit')->open() }}
        {{ html()->submit('Обновить данные') }}
        {{ html()->form()->close() }}
    @endforeach

@endsection
