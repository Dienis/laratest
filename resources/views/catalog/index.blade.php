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
              {!! Form::open(['url' => 'about-us']) !!}
              <div class="form-group">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Имя']) !!}
              </div>
              <div class="form-group">
                {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => '+7 (XXX) XXX XX XX']) !!}
              </div>

              <div class="form-group">
                {!! Form::select('size', ['Песок строительный' => 'Песок строительный', 'Щебень' => 'Щебень', 'Бетон' => 'Бетон', 'Грунт' => 'Грунт', 'Песчано-гравийная смесь' => 'Песчано-гравийная смесь', 'Глина' => 'Глина', 'Гравий' => 'Гравий'], null, ['class' => 'form-control']) !!}
              </div>


              <div class="form-group text-center">
                {!! Form::submit('Заказать', ['class' => 'btn btn-warning']) !!}
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
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                  Заказать звонок
                </button>

                <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div>
                        <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="logo">
                      </div>
                      <div>
                        <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                      </div>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      {!! Form::open(['url' => 'about-us']) !!}
                      <div class="form-group">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Имя']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => '+7 (XXX) XXX XX XX']) !!}
                      </div>

                      <div class="form-group">
                        {!! Form::submit('Заказать', ['class' => 'btn btn-primary']) !!}
                      </div>

                      {!! Form::close() !!}
                    </div>
                  </div>
                </div>
              </div>
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
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
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
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
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
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
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
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
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
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
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
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
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
              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
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
        <h1>test index</h1>
      </div>
    </div>
    </div>

@stop
