@extends('app')
@if($material->seo_title)
  @section('title', "$material->seo_title")
@else
  @section('title', "$material->title")
@endif
@if($material->meta_description)
  @section('description', "$material->meta_description")
@endif
@section('content')
  <div class="katalog-top">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>{{ $material->title }} с доставкой</h2>
        </div>
        <div class="col-md-5">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item"><a href="/katalog-materialov">Каталог материалов</a></li>
              <li class="breadcrumb-item"><a href="/katalog-materialov/shheben">Щебень</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $material->title }}</li>
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
        @if($material->image)
          <div class="excerpt">
            <img class="img-fluid" src="{{ Voyager::image($material->image) }}" alt="logo">
          </div>
        @endif
        {!! $material->body !!}
          @include('zvonite')
      </div>
    </div>
  </div>
@stop
