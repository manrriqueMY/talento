$(document).ready( function() {
	$(document).on('change', '.btn-file :file', function() {
	var input = $(this),
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
	input.trigger('fileselect', [label]);
	});

	$('.btn-file :file').on('fileselect', function(event, label) {
	    
	    var input = $(this).parents('.input-group').find(':text'),
	        log = label;
	    
	    if( input.length ) {
	        input.val(log);
	    } else {
	        if( log ) alert(log);
	    }
    
	});
	function readURL(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        
	        reader.onload = function (e) {
	            $('#preview').attr('src', e.target.result);
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#Company_photo").change(function(){
	    readURL(this);
	}); 	

	/****************************************************/
	tinymce.init({
		selector: '#about'
	});
	tinymce.init({
		selector: '#mission'
	});
	tinymce.init({
		selector: '#benefits'
	});
});

$('.panel-collapse').on('show.bs.collapse', function () {
	$(this).siblings('.panel-heading').addClass('active');
});

$('.panel-collapse').on('hide.bs.collapse', function () {
	$(this).siblings('.panel-heading').removeClass('active');
});

