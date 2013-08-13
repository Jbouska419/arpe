<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<meta http-equiv="refresh" content="5;URL=http://www.arpeconstructions.com/index.php">
	<link rel = "stylesheet" type = "text/css" href = "includes/style.css" media = "screen" />
	<script src="_js/jquery-1.6.3.min.js"></script>
	<script src="_js/nav1.1.min.js"></script>
<script>
$(document).ready(function() {
 $("#navigation").navPlugin({
   'itemWidth': 189.6,
   'itemHeight': 26,
   'navEffect': "slide",
   'speed': 250
 });
}); // end ready

$(document).ready(function() {
	$(':text:first').focus();
	$('#contact').validate({
		rules: {
			firstname: {
				required: true
			},
			lastname: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				rangelength: [10,10]
			},
		}, // end rules
		messages: {
			firstname: {
				required: "Please enter your first name."
			},
			lastname: {
				required: "Please enter your last name."
			},
			company: {
				required: "Please enter your company name."
			},
			email: {
				required: "Please enter your e-mail address.",
				email: "This is not a valid e-mail address."
			},
			phone: {
				required: 'Please enter your phone number.',
				rangelength: 'Phone number must be 10 digits, ie: 630123456'
			}
		}, // end messages
		}); // end validate
}); // end ready
</script>
</head>

<body>
	
	<div class = "shell">
		<div id = "header">
			<div id = "logo">
				<img src = "images/logo04.jpg">
			</div>
				<div id = "nav">
					<ul>
						<li><a href = "index.php">Home</a></li>
						<li><a href="facts.php">The Facts</a></li>
						<li><a href = "services.php">Services</a></li>
						<li><a href = "contact.php">Contact Us</a></li>
					</ul>
				</div> <!-- nav -->
		</div> <!-- header -->
	
