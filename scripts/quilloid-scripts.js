$(document).ready(function() {
	$('#modal1').hide();
	$('#modal2').hide();
	$('#modal3').hide();
	$('#modal4').hide();

	$('#button1').click(function() {
		$('#modal1').toggle();
	});

	$('#button2').click(function() {
		$('#modal2').toggle();
	});

	$('#button3').click(function() {
		$('#modal3').toggle();
	});

	$('#button4').click(function() {
		$('#modal4').toggle();
	});

	$('#close1').click(function() {
		$('#modal1').hide();
	});

	$('#close2').click(function() {
		$('#modal2').hide();
	});

	$('#close3').click(function() {
		$('#modal3').hide();
	});

	$('#close4').click(function() {
		$('#modal4').hide();
	});

	$('#nav-bar-dropdown').hide();

	$('.icon-nav-profile').click(function() {
		$('#nav-bar-dropdown').toggle();
	});

	$('#update_profile').hide();

	$('#update-btn').click(function() {
		$('#update_profile').show();
	});

	$('#cancel-btn').click(function() {
		$('#update_profile').hide();
	});
});
