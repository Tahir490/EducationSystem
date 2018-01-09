$(document).ready(function(){
$('#old_pass').keyup(function(){
var len = $('#old_pass').val().length;

if(len<1){
	$('.old_pass').text('');
	$('.old_pass').removeClass('red');
	$('.old_pass').removeClass('orange');
	$('.old_pass').removeClass('green');
}

else if(len<=4){
$('.old_pass').text('Weak');
$('.old_pass').addClass('red');
$('.old_pass').removeClass('orange');
$('.old_pass').removeClass('green');
}

else if(len<=8){
$('.old_pass').text('Good');
$('.old_pass').addClass('orange');
$('.old_pass').removeClass('red');
$('.old_pass').removeClass('green');
}

else
{
$('.old_pass').text('Strong');
$('.old_pass').addClass('green');
$('.old_pass').removeClass('red');
$('.old_pass').removeClass('orange');	
}
}); 
});

$(document).ready(function(){
$('#new_pass').keyup(function(){
var len = $('#new_pass').val().length;

if(len<1){
	$('.new_pass').text('');
	$('.new_pass').removeClass('red');
	$('.new_pass').removeClass('orange');
	$('.new_pass').removeClass('green');
}

else if(len<=4){
$('.new_pass').text('Weak');
$('.new_pass').addClass('red');
$('.new_pass').removeClass('orange');
$('.new_pass').removeClass('green');
}

else if(len<=8){
$('.new_pass').text('Good');
$('.new_pass').addClass('orange');
$('.new_pass').removeClass('red');
$('.new_pass').removeClass('green');
}

else
{
$('.new_pass').text('Strong');
$('.new_pass').addClass('green');
$('.new_pass').removeClass('red');
$('.new_pass').removeClass('orange');	
}
}); 
}); 

$(document).ready(function(){
$('#con_new_pass').keyup(function(){
var len = $('#con_new_pass').val().length;

if(len<1){
	$('.con_new_pass').text('');
	$('.con_new_pass').removeClass('red');
	$('.con_new_pass').removeClass('orange');
	$('.con_new_pass').removeClass('green');
}

else if(len<=4){
$('.con_new_pass').text('Weak');
$('.con_new_pass').addClass('red');
$('.con_new_pass').removeClass('orange');
$('.con_new_pass').removeClass('green');
}

else if(len<=8){
$('.con_new_pass').text('Good');
$('.con_new_pass').addClass('orange');
$('.con_new_pass').removeClass('red');
$('.con_new_pass').removeClass('green');
}

else
{
$('.con_new_pass').text('Strong');
$('.con_new_pass').addClass('green');
$('.con_new_pass').removeClass('red');
$('.con_new_pass').removeClass('orange');	
}
}); 
}); 