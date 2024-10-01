@extends('layouts.layout')
@section('content')
    <h3>{{ 'Пользователь "' . $user->username . '"' }}</h3>
    <br>

    Логин: {{ $user->username }}<br>
    Имя: {{ $user->name }}<br>
    Фамилия: {{ $user->surname }}<br>
    Отчество/Матчество: {{ $user->patronymic }}<br>
    Телефон: {{ $user->phoneNumber }}<br>
    Электронная почта: {{ $user->email }}<br>

    <h3>Отредактировать пользователя</h3>
    <br>
    {{ html()->form('POST', '/users/'.$user->id.'/edit')->open() }}
    Новый Логин: {{ html()->input('text', 'username') }} <br>
    Новое Имя: {{ html()->input('text', 'name') }} <br>
    Новая Фамилия: {{ html()->input('text', 'surname') }} <br>
    Новое Отчество/Матчество: {{ html()->input('text', 'patronymic') }} <br>
    Новый Телефон: {{ html()->input('text', 'phoneNumber') }} <br>
    Новая Электронная почта: {{ html()->input('email', 'email') }} <br>
    <br>
    {{ html()->submit('Изменить') }}
    {{ html()->form()->close() }}
@endsection
