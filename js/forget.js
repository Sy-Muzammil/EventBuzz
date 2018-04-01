$(document).ready(function() {
/*setTimeout(popup, 1);
function popup() {
$("#logindiv").show();
}*/
$("#forget #cancel").click(function() {
$(this).parent().parent().parent().hide();
});
$("#onclick").click(function() {
$("#forgetdiv").show();
});
$("#open_signup").click(function() {
	$("#logindiv").hide();
	$("#contactdiv").show();
});
$("#open_forget").click(function() {
	$("#contactdiv").hide();
	$("#logindiv").show();
});
$("#contact #cancel").click(function() {
$(this).parent().parent().parent().hide();
});
// Contact form popup send-button click event.
$("#send").click(function() {
var name = $("#name").val();
var email = $("#email").val();
var contact = $("#contactno").val();
var message = $("#message").val();
if (name == "" || email == "" || contactno == "" || message == ""){
alert("Please Fill All Fields");
}else{
if (validateEmail(email)) {
$("#contactdiv").css("display", "none");
}else {
alert('Invalid Email Address');
}
function validateEmail(email) {
var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
if (filter.test(email)) {
return true;
}else {
return false;
}
}
}
});
// Login form popup login-button click event.
$("#forgetbtn").click(function() {
var name = $("#Email").val();
//var password = $("#password").val();
if (Email == ""){
alert("Email was Wrong");
}else{
$("#logindiv").css("display", "none");
}
});
});
