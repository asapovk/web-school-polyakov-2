@extends('layouts.master')


@section('title')
"Онлайн-школа"
@endsection



@section('content')
@if (Auth::check())
     @include('includes.logged')

@else
     @include('includes.header')
@endif


<div class='container'>
  <div class='row'>
    <div class="col-md-8 crsI">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-body pnl">
              <div class="inside_course_img">
                <img src="/img/question.jpg" alt="Курс" width="100" height="100" class="panel-image">
              </div>
              <div class="inside_course_text">
                Курс №1 Транзитивная механика элементарных частиц по А.Франкенштейну
              </div>
              <div class='inside_course_img iAuthor'> Автор: Вася Пупкин </div>
              <div class='inside_course rating'>Рейтинг:</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body pnl">
            <div class="inside_course_img">
              <img src="/img/question.jpg" alt="Курс" width="100" height="100" class="panel-image">
            </div>
            <div class="inside_course_text">
              Курс №2 Полярные вычисления зимнего солнцестояния или как гоовить суп
            </div>
          </div>
        </div>
          <div class="panel panel-default">
            <div class="panel-body pnl">
                <div class="inside_course_img">
                  <img src="/img/question.jpg" alt="Курс" width="100" height="100" class="panel-image">
                </div>
                <div class="inside_course_text">
                  Курс №3 Как придумывать сложные названия для курсов
                </div>
            </div>
          </div>
          </div>
        </div>

    <div class="col-md-4 crsR">
      Filters
    </div>
  </div>
</div>



@include('includes.footer')

@endsection
