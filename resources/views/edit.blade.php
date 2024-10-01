@extends('layouts.layout')
@section('content')

    <h3>Отредактировать пользователя</h3>
    <br>
    {{ html()->form('POST', '/users/{id}/edit')->open() }}
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
