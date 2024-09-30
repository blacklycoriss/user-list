@extends('layouts.layout')
@section('content')
    <h3>Все пользователи сайта</h3>
    <span><a href="/users/create">Создать нового пользователя</a></span>
    <p>Имя | Электронная почта</p>
    @foreach($users as $user)
        <li>{{ $user->name . ' | ' . $user->email}}</li>
    @endforeach

@endsection
