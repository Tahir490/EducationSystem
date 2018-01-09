$(document).ready(function(){
$('#password').keyup(function(){
var len = $('#password').val().length;

if(len<1){
	$('.pass').text('');
	$('.pass').removeClass('red');
	$('.pass').removeClass('orange');
	$('.pass').removeClass('green');
}

else if(len<=4){
$('.pass').text('Weak');
$('.pass').addClass('red');
$('.pass').removeClass('orange');
$('.pass').removeClass('green');
}

else if(len<=8){
$('.pass').text('Good');
$('.pass').addClass('orange');
$('.pass').removeClass('red');
$('.pass').removeClass('green');
}

else
{
$('.pass').text('Strong');
$('.pass').addClass('green');
$('.pass').removeClass('red');
$('.pass').removeClass('orange');	
}
}); 
}); 