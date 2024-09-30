@extends('layouts.layout')
@section('content')

    <h3>Создать нового пользователя на сайте</h3>
    <br>
    {{ html()->form('POST')->open() }}
        Логин: {{ html()->input('text', 'username') }} <br>
        Имя: {{ html()->input('text', 'name') }} <br>
        Фамилия: {{ html()->input('text', 'surname') }} <br>
        Отчество/Матчество: {{ html()->input('text', 'patronymic') }} <br>
        Телефон: {{ html()->input('text', 'phoneNumber') }} <br>
        Электронная почта: {{ html()->input('email', 'email') }} <br>
        <br>
        {{ html()->submit('Создать') }}
    {{ html()->form()->close() }}
@endsection
