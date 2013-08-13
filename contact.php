<?php # contact.php
$page_title = 'Contact Us';
include ('includes/header2.php');
?>

<div id = "content">
		<div class="cl20"></div>
		<h3>Get Started on the Home of Your Dreams</h3>
		
		<div class="form">
				<form action="process.php" method="post" name="contact" id="contact">

					<fieldset><legend>Request a free consultation today:</legend>
						<div class="cl20"></div>
							<p><label>First Name: <input type="text" name="firstname" id="firstname" class="required" size="40" maxlength="40" /></label><span>*</span></p>
							<p><label>Last Name: <input type="text" name="lastname" id="lastname" class="required" size="40" maxlength="40" /></label><span>*</span></p>
							<p><label>Email Address: <input type="text" name="email" id="email" class="required" size="37" maxlength="40" /></label><span>*</span></p>
							<p><label>Phone: <input type="text" name="phone" id="phone" class="required" size="43" maxlength="12" /></label> <span>*</span></p> 
							<p><label>Date: <input type="text"  name="date" size="40" maxlength="10" value="<?php echo date ("m/d/Y") ?>" /></label><span>*</span></p>
							<p><label>Comments: <textarea name="comment" rows="4" cols="40"></textarea></label></p>
					</fieldset>
						<div class="cl10"></div>
					<p align="center"><input type="submit" name="submit" value="Request a Free Consultation" /></p>
				</form>
		</div>
	
	<?php
	include ('includes/footer.html');
	?>

