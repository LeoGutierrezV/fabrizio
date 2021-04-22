@extends('layouts.base')

@section('title','Home')

@section('body')

  @include('shared.menu')


  <div class="site-blocks-cover" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/index%20page%20fsw%2FGIFWEB.gif?alt=media&token=1135f174-fd96-4356-b455-d33f9d7a11bd);" data-aos="fade"></div>
  <div class="site-blocks-cover1" style="background-image: url(https://firebasestorage.googleapis.com/v0/b/fabriziosurferwinn.appspot.com/o/index%20page%20fsw%2FFORMATO.gif?alt=media&token=4211f69c-50d7-4f28-b830-36eab0b636ec);" data-aos="fade"></div>
  

  @include('home/colection')


  @include('shared.footer')

@endsection