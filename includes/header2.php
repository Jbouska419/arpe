<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title><?php echo $page_title; ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link rel = "stylesheet" type = "text/css" href = "includes/style.css">
	
	<script type = "text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type = "text/javascript" src="galleria/galleria-1.2.7.min.js"></script>
	<script src="_js/jquery-1.6.3.min.js"></script>
	<script src="_js/jquery.validate.min.js"></script>
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
			company: {
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
				required: "<br />Please enter your first name."
			},
			lastname: {
				required: "<br />Please enter your last name."
			},
			email: {
				required: "<br />Please enter your e-mail address.",
				email: "<br />This is not a valid e-mail address."
			},
			phone: {
				required: '<br />Please enter your phone number.',
				rangelength: '<br />Phone number must be 10 digits, ie: 630123456'
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
			<div id = "logo2">
			</div> <!-- logo2-->
			</div> <!--logo-->
		</div> <!--header-->
		
		<div id = "nav"> 
			<ul id="navigation" >
				<li><a href="index.php">Home</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="gallery.php">Photo Gallery </a>
				<li><a href="testimonials.php">Testimonials</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</div><!-- nav -->
		<div class="cl"></div>
		
