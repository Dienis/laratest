@extends('app')
@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.css" type="text/css" media="screen" />
@stop
@section('title', 'Галерея - pesok-sheben.su')
@section('description', 'Услуги доставки нерудных материалоа по выгодным ценам в Москве и Подмосковье с и гарантией качества от поставщика.')
@section('content')
  <div class="pages-top">
    <div class="container">
      <div class="row">
      <div class="col-md-7">
        <h2>Галерея</h2>
      </div>
      <div class="col-md-5">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Галерея</li>
          </ol>
        </nav>
      </div>
    </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="left-menu">
          @include ('leftmenu')
        </div>
      </div>
      <div class="col-sm-9">
        <div class="row">
          @foreach($images as $image)
            <div class="col-md-6 gallery">
              <a href="{{ Voyager::image( $image ) }}" data-fancybox="group">
                <img class="img-fluid" src="{{ Voyager::image( $image ) }}" alt="" />
              </a>
          </div>
        @endforeach
          </div>

      </div>
    </div>
  </div>
@section('js')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.js"></script>
@stop
@stop
