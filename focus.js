$(document).ready(function(){


$('#name').focusin(function(){
$('.user').text('* This is reuired field');
})

$('#name').focusout(function(){
$('.user').text('');
})

$('#email').focusin(function(){
$('.email').text('* This is reuired field');
})

$('#email').focusout(function(){
$('.email').text('');
})

$('#old_pass').focusin(function(){
$('.old_pass').text('* This is reuired field');
})

$('#old_pass').focusout(function(){
$('.old_pass').text('');
})

$('#new_pass').focusin(function(){
$('.new_pass').text('* This is reuired field');
})

$('#new_pass').focusout(function(){
$('.new_pass').text('');
})

$('#con_new_pass').focusin(function(){
$('.con_new_pass').text('* This is reuired field');
})

$('#con_new_pass').focusout(function(){
$('.con_new_pass').text('');
})

});