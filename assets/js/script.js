// Form validation
function isValid() {
	var password1 = $('#password1').val();
	var password2 = $('#password2').val();
	var email1 = $('#email1').val();
	var emailReg = /^[\w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;

	// Email
	if (emailReg.test(email1)) {
		$('#loginerror').html('');
	} else {
		$('#loginerror').html('A valid email must be entered');
		return;		
	}
	// Password length
	if (password1.length < 6 && password2.length < 6) {
		$('#loginerror').html('Password should be at least 6 characters');
		return;
	} else {
		$('#loginerror').html('');
	}
	// Password match
	if (password1 != password2) {
		$('#loginerror').html('Passwords do not match');
		$('#continue').attr('disabled', true);
	} else {				
		$('#loginerror').html('');
		$('#continue').removeAttr('disabled');
	}
};

// AJAX

	// $(".render_modal_edit").click(function(){
	// 	var index = $(this).data('index')
	// 	$.post('render_modal_edit.php', {
	// 		'index' : index
	// 	}, function(data){
	// 		$('#modal-body2').html(data);
	// 	});
	// });