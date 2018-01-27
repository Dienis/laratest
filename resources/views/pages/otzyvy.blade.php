@extends('app')
@section('title', "Отзывы - pesok-sheben.su")
@section('content')
  <div class="pages-top">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h2>Отзывы</h2>
        </div>
        <div class="col-md-5">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/">Главная</a></li>
              <li class="breadcrumb-item active" aria-current="page">Отзывы</li>
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
          <div class="col-sm-6 reviews">
            <div class="reviews-body">
            <p>Для выравнивания участка у нашего дома заказывали 120 кубометров суглинка и 30 кубов плодородного грунта. К выполнению задачи компания "Пессок" отнеслась очень ответственно - привезли материалы вовремя, качество материалов - отличное. Спасибо большое за работу!</p>
            <div class="row reviews-bottom">
              <div class="col-sm-3 reviews-img"><img class="rounded-circle img-fluid" src="{!! asset('img/reviews/reviews1.jpg') !!}" alt="Инна Валерьевна"></div>
              <div class="col-sm-9 reviews-name"><h6>Инна Валерьевна</h6></div>
            </div>
            </div>
          </div>
          <div class="col-sm-6 reviews">
            <div class="reviews-body">
              <p>Покупали песок в компании "Пессок" 🙂 Требовалось привезти 300 кубометров. Позвонили, согласовали стоимость и график поставок. Работы были исполнены в срок, качество песка - отличное! Буду рекомендовать Вас своим коллегам!</p>
              <div class="row reviews-bottom">
                <div class="col-sm-3 reviews-img"><img class="rounded-circle img-fluid" src="{!! asset('img/reviews/reviews2.jpg') !!}" alt="Иван Николаевич"></div>
                <div class="col-sm-9 reviews-name"><h6>Иван Николаевич</h6></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 reviews">
            <div class="reviews-body">
              <p>При строительстве многоэтажного здания мы воспользовались услугами по доставке бетона от компании "Пессок" в объеме 1500 кубометров. Компания "Пессок" проявила себя как надежный партнер с отлично отлаженный схемой работы. Спасибо за качественную работу!</p>
              <div class="row reviews-bottom">
                <div class="col-sm-3 reviews-img"><img class="rounded-circle img-fluid" src="{!! asset('img/reviews/reviews3.jpg') !!}" alt="Николай Алексеевич"></div>
                <div class="col-sm-9 reviews-name"><h6>Николай Алексеевич</h6></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 reviews">
            <div class="reviews-body">
              <p>Я представитель строительной компании. Вот уже 2 года работаем с компанией "Пессок", регулярно заказываем нерудные материалы. Очень довольны сотрудничеством, работы выполняются четко, в срок и качество материалов - одно из лучших в Москве.</p>
              <div class="row reviews-bottom">
                <div class="col-sm-3 reviews-img"><img class="rounded-circle img-fluid" src="{!! asset('img/reviews/reviews4.jpg') !!}" alt="Ирина"></div>
                <div class="col-sm-9 reviews-name"><h6>Ирина</h6></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 reviews">
            <div class="reviews-body">
              <p>Заказывали в компании "Пессок" гравий для отсыпки дорожек на участке у дома. Материалы качественные, работали четко, в срок. Если что еще понадобиться по строительству - обязательно буду обращаться!</p>
              <div class="row reviews-bottom">
                <div class="col-sm-3 reviews-img"><img class="rounded-circle img-fluid" src="{!! asset('img/reviews/reviews5.jpg') !!}" alt="Павел Алексеевич"></div>
                <div class="col-sm-9 reviews-name"><h6>Павел Алексеевич</h6></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 reviews">
            <div class="reviews-body">
              <p>Компания "Пессок" осуществляла для нас комплексную поставку нерудных материалов для ландшафтного дизайна. Для благоустройства парка площадью 0,7 га нам поставляли песок, гравий и щебень. Очень приятно было работать с профессионалами, за все время работы - не было ни одной задержки!</p>
              <div class="row reviews-bottom">
                <div class="col-sm-3 reviews-img"><img class="rounded-circle img-fluid" src="{!! asset('img/reviews/reviews6.jpg') !!}" alt="Светлана"></div>
                <div class="col-sm-9 reviews-name"><h6>Светлана</h6></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
