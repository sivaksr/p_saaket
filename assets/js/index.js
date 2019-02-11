$(document).ready(function() {

  var ct = 0;

  $('.next1').on('click', function(e) {
    e.preventDefault();
	var error = 0;
	$('.text-danger').remove();
	$('#account input,#account select').each(function(){
		if($(this).val() == ''){
			$(this).parent().append('<div class="text-danger">This field is required</div>');
			error++;
		}
	});
	if(error == 0){
		$('#account').animate('slow', function() {

		  if (error > 0) {
			$('#account').removeClass('transition visible');
			$('#account').addClass('transition hidden');

		  }
		  $('#account').css('display', 'none');

		  $('#accountS').addClass('disabled');
		  $('#socialP').removeClass('disabled');
		  $("#social").transition('fly right');
		  $('body').css('background-color', '#06000a');
		  $('#social button').removeClass('inverted violet');
		  $('#social button').addClass('inverted blue');
		  ct++;

		});
	}

  });

  $('.prev1').one('click', function(e) {

    e.preventDefault();
    $('#accountS').removeClass('disabled');
    $('#socialP').addClass('disabled');

    $('#social').animate('slow', function() {

      $('body').css('background-color', '#300032');
      $('#social').transition('hide');
      $("#account").transition('fly right');

    });

  });

  $('.next2').on('click', function(m) {

    m.preventDefault();
	var err = 0;
	$('.text-danger').remove();
	$('#social input,#social select').each(function(){
		if($(this).val() == ''){
			$(this).parent().append('<div class="text-danger">This field is required</div>');
			err++;
		}
			
		
	});
	if(err == 0){
		$('#socialP').addClass('disabled');
		$('#details').removeClass('disabled');

		$('#social').animate('slow', function() {

		  $('#personal button').removeClass("inverted violet");
		  $('#personal button').addClass("inverted orange");
		  $('body').css('background-color', '#251605');
		  $('#social').transition('hide');

		  $('#personal').transition('fly right');
		});
	}

  });

  $('.prev2').one('click', function(m) {

    m.preventDefault();
    $('#details').addClass('disabled');
    $('#socialP').removeClass('disabled');

    $('#personal').animate('slow', function() {

      $('body').css('background-color', '#06000a');
      $('#personal').transition('hide');

      $('#social').transition('fly right');
    });

  });

  $('.submit').on('click', function(p) {

    p.preventDefault();
	var errors = 0;
	$('.text-danger').remove();
	$('#personal input,#personal textarea').each(function(){
		if($(this).val() == ''){
			$(this).parent().append('<div class="text-danger">This field is required</div>');
			errors++;
		}
	});
	if(errors == 0){
		$('#defaultForm').submit();
	}
  });
 

});