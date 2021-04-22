@extends('layouts.base')

@section('title','Home')

@section('body')

  @include('shared.menu')


  <div class="centrador">
    <img class="responsive" src="https://i.imgur.com/OLfn7yp.png">
    <img class="responsive1" src="https://i.imgur.com/0BiQG0g.png">
  </div>
  <br>

  @include('home/colection')

  @include('shared.footer')
@endsection