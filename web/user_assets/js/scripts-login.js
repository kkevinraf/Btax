$(".login-link").click(function()
{
	$(".login-link").addClass('link-active');
	$(".signup-link").removeClass('link-active');

	$(".signup-form").addClass('notchoose');
	$(".signup-form").removeClass('choose');

	$(".login-form").addClass('choose');
	$(".login-form").removeClass('notchoose');
});

$(".signup-link").click(function()
{
	$(".signup-link").addClass('link-active');
	$(".login-link").removeClass('link-active');

	$(".signup-form").removeClass('notchoose');
	$(".signup-form").addClass('choose');

	$(".login-form").removeClass('choose');
	$(".login-form").addClass('notchoose');
});