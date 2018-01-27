@extends('app')
@if($page->meta_description)
  @section('title', "$page->meta_description")
@else
  @section('title', "$page->title")
@endif
@if($page->meta_keywords)
  @section('description', "$page->meta_keywords")
@endif
@section('content')
  <div class="pages-top">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>{{ $page->excerpt }}</h2>
        </div>
        <div class="col-md-5">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Каталог материалов</li>
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
        {!! $page->body !!}
      </div>
    </div>
  </div>
@stop
