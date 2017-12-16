@extends('layouts.master')

@section('title')
Вход на сайт
@endsection

@section('content')
@include('includes.header')

<center>
  <h1 style="margin-top:80px">Вход</h1>
</center>
<div class='container' style="margin-top:80px;" >
  <div class='row'>
    <div class='col-lg-4 col-lg-offset-4' style="background-color:rgb(51,51,51);" style="margin:10px;" >
      <form action="{{ route('signup') }}" method="post">
        <div class="form-group">
          <label for="username">-</label>
          <input type="text" class="form-control" required placeholder="Имя пользователя" id="username" name="username">
        </div>

       <div class="form-group">
         <label for="pwd">-</label>
         <input type="password" class="form-control" required placeholder="Пароль" id="pwd" name = "password">
       </div>


       <button type="submit" name="button" class="btn btn-default">Войти</button>
       <input type='hidden' name="_token" value="{{ Session::token() }}">
      </form>
    </div>
  </div>
</div>

@include('includes.footer')
@endsection
