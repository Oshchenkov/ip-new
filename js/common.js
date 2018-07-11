$( document ).ready(function() {

  $('.datepicker').datepicker({
	  format: 'dd/mm/yyyy',
	});

	$('#tellUs-dateOfBirth').datepicker({}).on('changeDate', dateChanged);
	function dateChanged(ev) {
	  var birthdayDate = new Date( $('#tellUs-dateOfBirth').datepicker('getUTCDate') );
		birthdayDate.setFullYear(birthdayDate.getFullYear()+65);
		$('#tellUs-NormalRetirementAge').datepicker("update", birthdayDate  ); 
	}


	$('#tellUs-partner-dateOfBirth').datepicker({}).on('changeDate', dateChangedPartner);
	function dateChangedPartner(ev) {
	  var birthdayDatePartner = new Date( $('#tellUs-partner-dateOfBirth').datepicker('getUTCDate') );
		birthdayDatePartner.setFullYear(birthdayDatePartner.getFullYear()+65);
		$('#tellUs-partner-NormalRetirementAge').datepicker("update", birthdayDatePartner  ); 
	}


  // If other options
  function selectOtherOption (selectId, selectedOptionId, showTextFieldID){
  	$( selectId ).change(function() {
	    $( selectedOptionId + ':selected' ).each(function() {
	      $( selectId ).hide();
	      $( showTextFieldID ).show();
	      $( showTextFieldID + ' input').focus();
	    });
	  });
		$( showTextFieldID + ' .closeBtn').click(function(){
			$( selectId ).show();
			$( selectId ).val(1);
			$( showTextFieldID ).hide();
		});
  }
	selectOtherOption ( '#tellUs-Title', 'option#tellUs-title--Other', '#tellUs-title--OtherText' );
	selectOtherOption ( '#tellUs-Title-partner', 'option#tellUs-titlePartner--Other', '#tellUs-titlePartner--OtherText' );

	selectOtherOption ( '#tellUs-Identification', 'option#tellUs-identification--Other', '#tellUs-Identification--OtherText' );
	selectOtherOption ( '#tellUs-partner-Identification', 'option#tellUs-partner-identification--Other', '#tellUs-partner-Identification--OtherText' );

  // Fee required fields 
  $( '#PR-BackEnd' ).change(function() {
    $( '#PR-BackEnd option:selected' ).each(function() {
      console.log( $( this ).val());
      if( $( this ).val()=='back-end'||$( this ).val()=='0%' ){
      	$('#PR-OffTheTop').prop('disabled', false);
      } else{
      	$('#PR-OffTheTop').prop('disabled', 'disabled');
      }
    });
  });
  $( '#PR-OffTheTop' ).change(function() {
    $( '#PR-OffTheTop option:selected' ).each(function() {
      console.log( $( this ).val());
      if( $( this ).val()=='off-the-top'||$( this ).val()=='0%' ){
      	$('#PR-BackEnd').prop('disabled', false);
      } else{
      	$('#PR-BackEnd').prop('disabled', 'disabled');
      }
    });
	});
	
	$( '.investmentIconInfo' ).click(function() {
		$( '#investmentManagement-info' ).fadeIn( "slow" );
	});
	$( '#investmentManagement-info_closeBtn' ).click(function() {
		event.preventDefault();
		$( '#investmentManagement-info' ).fadeOut( "slow" );
	});

	$('.list-group .list-group-item.enable').click(function(){
		event.preventDefault();
		
		if ( $(this).hasClass('active') ){
			$(this).removeClass('active');
		} else{
			$(this).addClass('active');
		}
	});
});