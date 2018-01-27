$(document).ready(function(){
  $('#calculation_delivery').on('submit', function(e){
    e.preventDefault();

    $(document).ajaxStart(function() {
      $('#calculation_delivery .btn').prop('disabled', true);
      $('#calculation_delivery .btn').append('<span><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i></span>');
      $( "#calculation_delivery .alert-danger" ).remove();
    });

    $.ajax({
      type: 'POST',
      url: '/contactform',
      data: $('#calculation_delivery').serialize(),
      success: function(data){
        console.log(data);
        $('#calculation_delivery .btn').prop('disabled', false);
        $('#calculation_delivery .alert-danger').remove();
        $("#calculation_delivery").get(0).reset();
        $( "#calculation_delivery" ).append( '<div class="alert alert-success" role="alert">' +data.responseText+ '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
        $( "#calculation_delivery .alert-success" ).delay(2000).fadeOut(1500);
        $('#calculation_delivery .btn span').remove();
      },
      error: function(errors) {
        $( "#calculation_delivery" ).append( '<div class="alert alert-danger" role="alert">Сообщение не отправлено<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );

        if(errors.responseJSON.errors.name != undefined) {
          $("#calculation_delivery input[name*='name']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.name +'</div>');
        }

        if(errors.responseJSON.errors.tel != undefined) {$("#calculation_delivery input[name*='tel']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.tel +'</div>');}
        $( "#calculation_delivery .alert-danger" );

        $('#calculation_delivery .btn').prop('disabled', false);
        $('#calculation_delivery .btn span').remove();
      }
    });
  });
});



$(document).ready(function(){
  $('#calculation_top').on('submit', function(e){
    e.preventDefault();

    $(document).ajaxStart(function() {
      $('#calculation_top .btn').prop('disabled', true);
      $('#calculation_top .btn').append('<span><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i></span>');
      $( "#calculation_top .alert-danger" ).remove();
    });

    $.ajax({
      type: 'POST',
      url: '/calculation_top',
      data: $('#calculation_top').serialize(),
      success: function(data){
        console.log(data);
        $('#calculation_top .btn').prop('disabled', false);
        $('#calculation_top .alert-danger').remove();
        $("#calculation_top").get(0).reset();
        $( "#calculation_top" ).append( '<div class="alert alert-success" role="alert">' +data.responseText+ '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
        $( "#calculation_top .alert-success" ).delay(2000).fadeOut(1500);
        $('#calculation_top .btn span').remove();
        setTimeout(function() {$('#calculationOfCost').modal('hide');}, 2700);
      },
      error: function(errors) {
        console.log(errors);
        $( "#calculation_top" ).append( '<div class="alert alert-danger" role="alert">Сообщение не отправлено<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );

        if(errors.responseJSON.errors.name != undefined) {
          $("#calculation_top input[name*='name']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.name +'</div>');
        }

        if(errors.responseJSON.errors.tel != undefined) {$("#calculation_top input[name*='tel']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.tel +'</div>');}

        if(errors.responseJSON.errors.name != undefined) {
          $("#calculation_top textarea[name*='msg']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.msg +'</div>');
        }

        $( "#calculation_top .alert-danger" );

        $('#calculation_top .btn').prop('disabled', false);
        $('#calculation_top .btn span').remove();
      }
    });
  });
});


$(document).ready(function(){
  $('#cooperation').on('submit', function(e){
    e.preventDefault();

    $(document).ajaxStart(function() {
      $('#cooperation .btn').prop('disabled', true);
      $('#cooperation .btn').append('<span><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i></span>');
      $( "#cooperation .alert-danger" ).remove();
    });

    $.ajax({
      type: 'POST',
      url: '/cooperation',
      data: $('#cooperation').serialize(),
      success: function(data){
        console.log(data);
        $('#cooperation .btn').prop('disabled', false);
        $('#cooperation .alert-danger').remove();
        $("#cooperation").get(0).reset();
        $( "#cooperation" ).append( '<div class="alert alert-success" role="alert">' +data.responseText+ '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
        $( '#cooperation .alert-success' ).delay(1500).fadeOut(1000);
        $('#cooperation .btn span').remove();
        setTimeout(function() {$('#cooperationModal').modal('hide');}, 2700);
      },
      error: function(errors) {
        $( "#cooperation" ).append( '<div class="alert alert-danger" role="alert">Сообщение не отправлено<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );

        if(errors.responseJSON.errors.name != undefined) {
          $("#cooperation input[name*='name']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.name +'</div>');
        }

        if(errors.responseJSON.errors.tel != undefined) {
          $("#cooperation input[name*='tel']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.tel +'</div>');
        }
        $( "#cooperation .alert-danger" );

        $('#cooperation .btn').prop('disabled', false);
        $('#cooperation .btn span').remove();
      }
    });
  });
});


$(document).ready(function(){
  $('#submitApplicationModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)
    modal.find('.modal-body input.material-name').val(recipient)
  })
  $('#submit_application').on('submit', function(e){
    e.preventDefault();

    $(document).ajaxStart(function() {
      $('#submit_application .btn').prop('disabled', true);
      $('#submit_application .btn').append('<span><i class="fa fa-refresh fa-spin fa-1x fa-fw"></i></span>');
      $( "#submit_application .alert-danger" ).remove();
    });

    $.ajax({
      type: 'POST',
      url: '/submit_application',
      data: $('#submit_application').serialize(),
      success: function(data){
        $('#submit_application .btn').prop('disabled', false);
        $('#submit_application .alert-danger').remove();
        $("#submit_application").get(0).reset();
        $( "#submit_application" ).append( '<div class="alert alert-success" role="alert">' +data.responseText+ '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
        $( '#submit_application .alert-success' ).delay(1500).fadeOut(1000);
        $('#submit_application .btn span').remove();
        setTimeout(function() {$('#submitApplicationModal').modal('hide');}, 2700);
      },
      error: function(errors) {
        $( "#submit_application" ).append( '<div class="alert alert-danger" role="alert">Сообщение не отправлено<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );

        if(errors.responseJSON.errors.tel != undefined) {
          $("#submit_application input[name*='tel']").after('<div class="alert alert-danger" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.tel +'</div>');
        }
        $( "#submit_application .alert-danger" );

        $('#submit_application .btn').prop('disabled', false);
        $('#submit_application .btn span').remove();
      }
    });
  });
});


$(document).ready(function(){
  $('#talk_project').on('submit', function(e){
    e.preventDefault();

    $(document).ajaxStart(function() {
      $('#talk_project .btn').prop('disabled', true);
      $( "#talk_project .alert-danger" ).remove();
    });

    $.ajax({
      type: 'POST',
      url: '/talk_project',
      data: $('#talk_project').serialize(),
      success: function(data){
        console.log(data);
        $('#talk_project .btn').prop('disabled', false);
        $('#talk_project .alert-danger').remove();
        $("#talk_project").get(0).reset();
        $( "#talk_project" ).append( '<div class="alert alert-success" role="alert">' +data.responseText+ '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
        $( '#talk_project .alert-success' ).delay(1500).fadeOut(1000);
      },
      error: function(errors) {
        $( "#talk_project" ).append( '<div class="alert alert-danger error2" role="alert">Сообщение не отправлено<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>' );
        if(errors.responseJSON.errors.tel != undefined) {
          $("#talk_project input[name*='tel']").after('<div class="alert alert-danger error1" role="alert"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+ errors.responseJSON.errors.tel +'</div>');
        }
        $( "#talk_project .alert-danger" );
        $('#talk_project .btn').prop('disabled', false);
      }
    });
  });

  $('body').on('mouseenter mouseleave','.dropdown',function(e){
    var _d=$(e.target).closest('.dropdown');_d.addClass('show');
    setTimeout(function(){
      _d[_d.is(':hover')?'addClass':'removeClass']('show');
    },100);
  });
});
jQuery("document").ready(function($){

  var nav = $('.topmenu');

  $(window).scroll(function () {
    if ($(this).scrollTop() > 75) {
      nav.addClass("f-nav");
    } else {
      nav.removeClass("f-nav");
    }
  });

});