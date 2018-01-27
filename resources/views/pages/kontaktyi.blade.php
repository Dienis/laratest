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
              <li class="breadcrumb-item active" aria-current="page">Контакты</li>
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
        <h4>Наш адрес</h4>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A50fc60774545ab24a1bef35672f0e37926c19ae32c8fb7ec768097bcf12ae7e0&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
        {!! $page->body !!}
      </div>
    </div>
  </div>
@stop
