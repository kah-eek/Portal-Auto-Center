$(function(){

	// Andorid input animation
	$(document).on('focusin','.android-input',function(){

	  var id = $(this).attr('id');

	  $(`label[for="${id}"]`).css({
	    marginBottom:'2%',
	    fontSize:'0.80rem',
	    transition:'0.5s'
	  });
	  // console.log($(`label[for="${id}"]`));
	});
	// ______________________________________________________________><
	// Label's returns
	$(document).on('blur','.android-input',function(){

	  if($(this).val() == '')
	  {
	      var id = $(this).attr('id');

		  $(`label[for="${id}"]`).css({
		    marginBottom:'-1%',
		    fontSize:'1rem',
		    transition:'0.5s'
		  });	  	
	  }
	});
	// ______________________________________________________________><

});