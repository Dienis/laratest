<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title', 'Доставка и перевозка нерудных материалов в Москве')</title>
  <meta name="description" content="@yield('description', 'Услуги доставки нерудных материалоа по выгодным ценам в Москве и Подмосковье с и гарантией качества от поставщика.')"/>

  <!-- Bootstrap CSS -->
  {!! Html::style('css/app.css') !!}
  {!! Html::style('css/style.css') !!}
  {!! Html::style('css/fonts.css') !!}
  @yield('css')
  <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('img/fav/apple-touch-icon.png') !!}">
  <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('img/fav/favicon-32x32.png') !!}">
  <link rel="icon" type="image/png" sizes="16x16" href="{!! asset('img/fav/favicon-16x16.png') !!}">
  <link rel="manifest" href="{!! asset('img/fav/manifest.json') !!}">
  <link rel="mask-icon" href="{!! asset('safari-pinned-tab.svg') !!} color='#5bbad5'">
  <meta name="theme-color" content="#ffffff">
  <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1486648680659{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><!-- Yandex.Metrika counter -->
  <script src="https://mc.yandex.ru/metrika/watch.js" type="text/javascript"></script>
  <script type="text/javascript">
    try {
      var yaCounter45174417 = new Ya.Metrika({
        id:45174417,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
      });
    } catch(e) { }
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/45174417" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->    <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function (d, w, c) {
      (w[c] = w[c] || []).push(function() {
        try {
          w.yaCounter46390956 = new Ya.Metrika({
            id:46390956,
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
          });
        } catch(e) { }
      });

      var n = d.getElementsByTagName("script")[0],
          s = d.createElement("script"),
          f = function () { n.parentNode.insertBefore(s, n); };
      s.type = "text/javascript";
      s.async = true;
      s.src = "https://mc.yandex.ru/metrika/watch.js";

      if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
      } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/46390956" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter
  <noindex><script async src="https://stats.lptracker.ru/code/new/39245"></script></noindex>-->
</head>
<body>
<div class="wrapper">
{!! menu('topmenu', 'topmenu') !!}
<div class="content">
  @yield('content')
</div>
  <div class="talk-project-shadow">
    <div class="talk-project">
      <div class="talk-project-left">
        <div>
          <h5>Поговорим о проекте?</h5>
          <p>Скажем примерную стоимость</p>
        </div>
      </div>
      <div class="talk-project-right">
        {!! Form::open(['id' => 'talk_project', 'metod' => 'POST', 'class' => 'form-inline']) !!}
        <div class="left-form">
          {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => '+7 (XXX) XXX XX XX', 'required' => 'required']) !!}
        </div>
        <div class="right-form text-center">
          <button type="submit" class="btn btn-warning">Перезвоните!</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
  </div>
<footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="bottom-left-menu">
              <h5>Список доставляемых материалов</h5>
              <div class="left-menu">
                @include ('leftmenu')
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="bottom-menu-custom">
              <ul class="list-unstyled">
                <li><a href="/">Главная страница</a></li>
                <li><a href="/dostavka">Доставка</a></li>
                <li><a href="/galereya">Галерея</a></li>
                <li><a href="/informatsiya">Информация</a></li>
                <li><a href="/kontaktyi">Контакты</a></li>
                <li><a href="/otzyvy">Отзывы</a></li>
                <li><a href="/sotrudnichestvo">Сотрудничество</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
@include('popup')
<!-- jQuery first, then Tether, then Bootstrap JS. -->
  {!! Html::script('js/jquery-3.2.1.min.js') !!}
  {!! Html::script('js/app.js') !!}
  {!! Html::script('js/calculation.js') !!}
  @yield('js')
  <script type="text/javascript" src="https://use.fontawesome.com/0e446ace81.js"></script>
</div>
</body>
</html>
