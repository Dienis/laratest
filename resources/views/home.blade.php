@extends('app')
@section('content')
  <div class="top-bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="top-form">
            <div class="top-form-header">
              <h3>Доставка песка, щебня</h3>
              <p>и др. материалов в Москве и ближайшем Подмосковье</p>
            </div>
            <div class="top-form-body">
              <h4 class="text-center">Закажите расчет доставки!</h4>
              {!! Form::open(['id' => 'calculation_delivery', 'metod' => 'POST']) !!}
              {{ csrf_field() }}
                  <div class="form-group">
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Имя']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => '+7 (XXX) XXX XX XX']) !!}
                  </div>

                  <div class="form-group">
                    {!! Form::select('material', ['Песок строительный' => 'Песок строительный', 'Щебень' => 'Щебень', 'Бетон' => 'Бетон', 'Грунт' => 'Грунт', 'Песчано-гравийная смесь' => 'Песчано-гравийная смесь', 'Глина' => 'Глина', 'Гравий' => 'Гравий'], null, ['class' => 'form-control']) !!}
                  </div>


                  <div class="form-group text-center">
                    <button type="submit" class="btn btn-warning">Заказать</button>
                  </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
        <div class="col-sm-4 offset-sm-4">
          <div class="top-contact">
            <div class="wpb_wrapper">
              <p> <span class="glyphicon glyphicon-earphone"></span>
                <a href="tel:+79164823306">
                    <span class="lptracker_phone">+7 (916) 482-33-06</span>
                </a>
              </p>
              <p>
                <span class="glyphicon glyphicon-envelope"></span>
                info@pesok-sheben.su <br>
                (для обращений)
              </p>

              <p>
                <span class="glyphicon glyphicon-envelope"></span>
                kp@pesok-sheben.su
                <br>
                (по вопросам партнерства)
              </p>
              <p>
                <span class="glyphicon glyphicon-time"></span>
                Пн -Вс / 9:00 - 23:00
              </p>
              <p>
                <strong>Всегда в срок. 7 дней в неделю</strong>
              </p>

              <p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#cooperationModal">
                  Заказать звонок
                </button>
              </p>
              <p>
                <strong>Сотрудничество</strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4">

        {{--Песок строительный--}}
        <div class="card">
          <h5 class="card-header">Песок строительный</h5>
          <div class="card-body">
            <p>
              <div class="float-left">Песок карьерный</div>
              <div class="float-right">От 550 руб./м3</div>
            </p>
<div class="clearfix"></div>
            <p>
            <div class="float-left">Песок речной</div>
            <div class="float-right">От 850 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">Песок мытый</div>
            <div class="float-right">От 800 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">Песок сеяный</div>
            <div class="float-right">От 720 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">Горячий песок</div>
            <div class="float-right">От 1290 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
              <div class="float-left">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submitApplicationModal" data-whatever="Песок строительный">
                Оставить заявку
              </button>
            </div>
            <div class="float-right">
              <a href="#">Подробнее</a>
            </div>
            </p>
          </div>
        </div>

        {{--Щебень--}}
        <div class="card">
          <h5 class="card-header">Щебень</h5>
          <div class="card-body">
            <p>
            <div class="float-left">Щебень гравийный</div>
            <div class="float-right">От 1050 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">Щебень известняковый</div>
            <div class="float-right">От 1350 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">Щебень гранитный</div>
            <div class="float-right">От 1900 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">Щебень вторичный</div>
            <div class="float-right">От 900 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submitApplicationModal" data-whatever="Щебень">
                Оставить заявку
              </button>
            </div>
            <div class="float-right">
              <a href="#">Подробнее</a>
            </div>
            </p>
          </div>
        </div>

        {{--Бетон--}}
        <div class="card">
          <h5 class="card-header">Бетон</h5>
          <div class="card-body">
            <p>
            <div class="float-left">М100 БСГ В7,5 П3 F50 W2</div>
            <div class="float-right">От 2350 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">М150 БСГ В12 П4 F100 W4</div>
            <div class="float-right">От 2580 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">М200 БСГ В15 П4 F100 W4</div>
            <div class="float-right">От 2740 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">М250 БСГ В20 П4 F200 W6</div>
            <div class="float-right">От 2850 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">М300 БСГ В22,5 П4 F150 W6</div>
            <div class="float-right">От 2960 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <p>
            <div class="float-left">М350 БСГ В25 П4 F200 W8</div>
            <div class="float-right">От 3050 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <div class="float-left">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submitApplicationModal" data-whatever="Бетон">
                Оставить заявку
              </button>
            </div>
            <div class="float-right">
              <a href="#">Подробнее</a>
            </div>
            </p>
          </div>
        </div>

        {{--Песчано-гравийная смесь--}}
        <div class="card">
          <h5 class="card-header">Песчано-гравийная смесь</h5>
          <div class="card-body">
            <p>
            <div class="float-left">Песчано-гравийная смесь</div>
            <div class="float-right">От 800 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">Обогащенная песчано-гравийная смесь</div>
            <div class="float-right">От 950 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submitApplicationModal" data-whatever="Песчано-гравийная смесь">
                Оставить заявку
              </button>
            </div>
            <div class="float-right">
              <a href="#">Подробнее</a>
            </div>
            </p>
          </div>
        </div>

        {{--Грунт--}}
        <div class="card">
          <h5 class="card-header">Грунт</h5>
          <div class="card-body">
            <p>
            <div class="float-left">Пескогрунт</div>
            <div class="float-right">От 450 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submitApplicationModal" data-whatever="Грунт">
                Оставить заявку
              </button>
            </div>
            <div class="float-right">
              <a href="#">Подробнее</a>
            </div>
            </p>
          </div>
        </div>

        {{--Глина--}}
        <div class="card">
          <h5 class="card-header">Глина</h5>
          <div class="card-body">
            <p>
            <div class="float-left">Глина</div>
            <div class="float-right">От 750 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submitApplicationModal" data-whatever="Глина">
                Оставить заявку
              </button>
            </div>
            <div class="float-right">
              <a href="#">Подробнее</a>
            </div>
            </p>
          </div>
        </div>

        {{--Гравий--}}
        <div class="card">
          <h5 class="card-header">Гравий</h5>
          <div class="card-body">
            <p>
            <div class="float-left">Гравий</div>
            <div class="float-right">От 910 руб./м3</div>
            </p>
            <div class="clearfix"></div>
            <p>
            <div class="float-left">
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#submitApplicationModal" data-whatever="Гравий">
                Оставить заявку
              </button>
            </div>
            <div class="float-right">
              <a href="#">Подробнее</a>
            </div>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <h4>Доставка нерудных материалов</h4>
        <p>Материалы данного типа преимущественно состоят из так называемых первичных и вторичных горных пород вулканической или осадочной природы. Их часто называют инертными, поскольку длительность их формирования в процессе воздействия на породу внешних факторов исчисляется тысячелетиями. Добываются, как правило, карьерным способом. Наша компания готова предложить вам целуй комплекс услуг, в число которых входит перевозка и доставка нерудных материалов (Москва).</p>
        <p>Относящиеся к данному типу элементы, в зависимости от их происхождения, принято подразделять на естественные и искусственные. К числу первых принадлежат песок, гравий, щебень и другие ископаемые, добываемые в естественной среде.</p>
        <h4>Классификация и особенности нерудных материалов</h4>
        <p>К разряду наиболее распространенных нерудных материалов, сформированных искусственным способом, относятся: керамзит, асфальт, разнообразные бетонные и другие смеси, изготовление которых предполагает обработку сырья.</p>
        <p>Расширенная классификация осуществляется в соответствии с нижеследующими характеристиками:</p>
        <ul>
          <li>Величина зерна</li>
          <li>Устойчивость к воздействию низких температур</li>
          <li>Пористость</li>
          <li>Плотность укладки</li>
        </ul>
        <p>Как правило, подавляющее большинство разновидностей элементов данной категории, добываемых карьерным способом, подвергается тем или иным методам обработки для придания им необходимых характеристик.</p>
        <p>Перевозка и доставка нерудных материалов, зачастую, выполняется с использованием специально предназначенной для этих целей техники.</p>
        <div class="row">

          @foreach($posts as $post)
              @if ($loop->first)
                <div class="col-sm-12">
                @else
                    <div class="col-sm-4">
              @endif
              <h4>{{ $post->title }}</h4>
                      <a class="home-link" href="katalog-materialov/{{ $post->slug }}">
                        <img class="img-fluid" src="{{ Voyager::image( $post->image ) }}" >
                        <div class="hov"></div>
                      </a>
            </div>
          @endforeach
        </div>
              <h4>Область применения</h4>
              <p>Нерудные материалы повсеместно применяют в качестве основы для дорожного покрытия, формирования оснований для различных сооружений, насыпей и площадок, а также используют в процессе производства бетонов, асфальтовых смесей и растворов.</p>
              <p>Сфера применения элементов данного типа определяется, исходя из целого ряда показателей, таких как:</p>
              <ul>
                <li>Плотность</li>
                <li>Величина зерен</li>
                <li>Особенности формы зерна</li>
              </ul>
            <p>Наиболее  широко используются: керамзит, гравий, щебень, песок.</p>
            <h4>Почему нам стоит доверять?</h4>
            <p></p>

            <div class="row">
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/ceny.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Разумные цены</strong></h6>
                    <p>Грамотный расчет стоимости услуг, в зависимости от объемов материала и расположения объекта</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/sroki.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Сроки</strong></h6>
                    <p>Выполнение работ в установленные сроки, возможность круглосуточной доставки материалов</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/uslugi.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Дополнительные услуги</strong></h6>
                    <p>Аренда техники, вывоз мусора, поставка других материалов, разработка котлованов, вывоз снега</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/opyt.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Большой опыт</strong></h6>
                    <p>Работаем на рынке с 2012 года, у нас хорошая репутация.</p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/soprov.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Официальное сопровождение</strong></h6>
                    <p>Предоставляем весь перечень необходимых закрывающих документов</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/postavki.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Бесперебойные поставки</strong></h6>
                    <p>Регулярное техническое обслуживание и идеальное состояние транспорта позволяет вести поставки материала 24/7</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/yur.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Юридическая ответственность</strong></h6>
                    <p>Заключение официального договора</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <img src="{!! asset('img/should/tehnika.png') !!}" alt="">
                  </div>
                  <div class="col-md-9">
                    <h6><strong>Своя техника </strong></h6>
                    <p>Самосвалы, автокраны, экскаваторы, погрузчики, бульдозер, вибропогружатель, мини-погрузчики</p>
                  </div>
                </div>
              </div>
            </div>

        </div>
    </div>
  </div>
  </div>

@stop
