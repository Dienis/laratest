@extends('app')
@if($information->seo_title)
  @section('title', "$information->seo_title")
@else
  @section('title', "$information->title")
@endif
@if($information->meta_description)
  @section('description', "$information->meta_description")
@endif
@section('content')
  <div class="katalog-top">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>{{ $information->excerpt }}</h2>
        </div>
        <div class="col-md-5">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item"><a href="/informatsiya">Информация</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $information->title }}</li>
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
        @if($information->image)
          <div class="excerpt">
            <img class="img-fluid" src="{{ Voyager::image($information->image) }}" alt="logo">
          </div>
        @else
          <div class="excerpt">
            <img class="img-fluid" src="{!! asset('img/default-bg.jpg') !!}" alt="logo">
          </div>
        @endif
        <h2>{{ $information->title }}</h2>
        {!! $information->body !!}
          @include('zvonite')
      </div>
    </div>
  </div>
@stop
