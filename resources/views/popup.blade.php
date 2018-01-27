<div class="modal fade" id="calculationOfCost" tabindex="-1" role="dialog" aria-labelledby="calculationOfCostLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="mod-logo">
          <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="logo">
        </div>
        <div class="mod-tit">
          <h5 class="modal-title">Расчет стоимости</h5>
        </div>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['id' => 'calculation_top', 'metod' => 'POST']) !!}
        <div class="form-group">
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Имя', 'required' => 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => '+7 (XXX) XXX XX XX', 'required' => 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) !!}
        </div>

        <div class="form-group">
          {!! Form::textarea('msg', null, ['class' => 'form-control', 'placeholder' => 'Ваше сообщение', 'rows' => '5', 'required' => 'required']) !!}
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-warning">Отправить</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="submitApplicationModal" tabindex="-1" role="dialog" aria-labelledby="submitApplicationModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="mod-logo">
          <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="logo">
        </div>
        <div class="mod-tit">
          <h5 class="modal-title">Оставить заявку</h5>
        </div>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['id' => 'submit_application', 'metod' => 'POST']) !!}
        <div class="form-group">
          {!! Form::hidden('material_name', null, ['class' => 'material-name']) !!}
          {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => '+7 (XXX) XXX XX XX', 'required' => 'required']) !!}
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-warning">Отправить</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cooperationModal" tabindex="-1" role="dialog" aria-labelledby="cooperationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="mod-logo">
          <img src="{{ Voyager::image( setting('site.logo') ) }}" alt="logo">
        </div>
        <div class="mod-tit">
          <h5 class="modal-title">Заказать звонок</h5>
        </div>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! Form::open(['id' => 'cooperation', 'metod' => 'POST']) !!}
        <div class="form-group">
          {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Имя', 'required' => 'required']) !!}
        </div>
        <div class="form-group">
          {!! Form::tel('tel', null, ['class' => 'form-control', 'placeholder' => '+7 (XXX) XXX XX XX', 'required' => 'required']) !!}
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-warning">Заказать звонок</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>