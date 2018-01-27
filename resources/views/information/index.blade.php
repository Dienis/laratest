@extends('app')
@section('title', "Информация - pesok-sheben.su")
@section('content')
  <div class="pages-top">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>Информация</h2>
        </div>
        <div class="col-md-5">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Информация</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
        @foreach($informations as $information)
          @foreach($information->posts as $posts)
            <div class="col-sm-4">
              <a href="/informatsiya/{{ $posts->slug }}">
                @if($posts->image)
                  <div class="excerpt">
                    <img class="img-fluid" src="{{ Voyager::image($posts->image) }}" alt="logo">
                  </div>
                  @else
                  <div class="excerpt">
                    <img class="img-fluid" src="{!! asset('img/default-bg.jpg') !!}" alt="logo">
                  </div>
                @endif
              </a>
              <h4 class="information-title"><a href="/informatsiya/{{ $posts->slug }}">{{ $posts->title }}</a></h4>
            </div>
          @endforeach
        @endforeach
        </div>
      </div>
    </div>
  </div>
@stop
