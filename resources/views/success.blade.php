@extends('layouts.app')
 
@section('title', 'Бронь успешна!')

@section('styles')
    <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
@stop


@section('content')
<style>
    .success {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .row {
        display: flex;
    }
    .success-item {
        text-align: center;
        display: flex;
        flex-direction: column;
        margin: 10px 20px;
    }
</style>
<ul role="list" class="p-6 divide-y divide-slate-200">
      <!-- Remove top/bottom padding when first/last child -->
      <li class="flex py-4 first:pt-0 last:pb-0">
        <div class="ml-3 overflow-hidden">
          <p class="text-sm font-medium text-slate-900">{{$name}}</p>
          <p class="text-sm font-medium text-slate-900">{{$email}}</p>
          <p class="text-sm font-medium text-slate-900">{{$phone}}</p>
          <p class="text-sm font-medium text-slate-900">{{$date}}</p>
          <p class="text-sm font-medium text-slate-900">{{$time}}</p>
          <p class="text-sm font-medium text-slate-900">{{$person}}</p>
        </div>
      </li>
  </ul>

  <div class="success">
    <div class="row">
        <div class="success-item">
            <div class="title">Имя: </div>
            {{$name}}</div>
        <div class="success-item">
            <div class="title">Email: </div>
            {{$email}}</div>
        <div class="success-item">
            <div class="title">Телефон: </div>
            {{$phone}}</div>
    </div>
    <div class="row">
        <div class="success-item">
            <div class="title">Дата: </div>
            {{$date}}</div>
        <div class="success-item">
            <div class="title">Время: </div>
            {{$time}}</div>
        <div class="success-item">
            <div class="title">Количество персон: </div>
            {{$person}}</div>
    </div>
  </div>
@stop