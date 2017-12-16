@extends('layouts.master')

@section('title')
Регистрация
@endsection


@section('content')
@include('includes.header')
@if (count($errors) > 0)
  <div class='row'>
    <div class='col-md-6'>
      <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
      </ul>
    </div>
  </div>
@endif
<center>
  <h1 style="margin-top:80px">Регестрация</h1>
</center>
<div class='container' style="margin-top:80px;" >
  <div class='row'>
    <div class='col-lg-4 col-lg-offset-4' style="background-color:rgb(51,51,51);" style="margin:10px;" >
      <form action="{{ route('signup') }}" method="post">
        <div class="form-group {{$errors->has('username') ? 'has-error' : ''}}">
          <label for="username">-</label>
          <input type="text" class="form-control" required placeholder="Имя пользователя" id="username" name="username" value="{{ Request::old('username') }}">
        </div>
       <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
         <label for="email">-</label>
         <input type="email" class="form-control" required placeholder="Email" id="email" name="email" value="{{ Request::old('email') }}">
       </div>
       <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
         <label for="pwd">-</label>
         <input type="password" class="form-control" required placeholder="Пароль" id="pwd" name = "password">
       </div>
       <div class="form-group">
         <label for="pwdconf">-</label>
         <input type="password" class="form-control" required placeholder="Подтверждение пароля" id="pwdconf">
       </div>
       <div class="checkbox">
         <label style="color:#FFFFFF;"><input type="checkbox"> Я согласен с правилами пользования</label>
       </div>
       <button type="submit" name="button" class="btn btn-default">Подтвердить</button>
       <input type='hidden' name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </div>
</div>
@include('includes.footer')
@endsection
