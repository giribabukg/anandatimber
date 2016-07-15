<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title> Anandha Timber Depot </title>
  <meta	name="generator" content="editplus"	/>
  <meta	name="author" content="" />
  <meta	name="keywords"	content="" />
  <meta	name="description" content="" />
  <link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/slider.js"></script>
  <script type="text/javascript">
	$(document).ready(function() {		
		//Load the slideshow
		theRotator();
		$('div.rotator').fadeIn(1000);
		$('div.rotator ul li').fadeIn(1000); // tweek for IE
	});
</script>
<link rel="shortcut icon" href="favicon.ico" />
 </head>

 <body>
	<div id="main-container">
		<!-- Header -->
	<?php include_once("includes/header_2.php"); ?>
		<!-- // Header -->
		<div class="clear"></div>
		<!-- Content area -->
		<div class="home-mid-container">
			<div class="page-wrap">
				<div class="home-mid-left">
					<?php include_once('includes/breadcrumb.php'); ?>
					<div>
						<form name="contacts_form" id="contacts-form" method="post" action="contact.php" onsubmit="return validateContactForm()">
							<fieldset>
								<div class="field"><label>Your Name:<span class="mandatory-star">&nbsp;*</span></label><input name="cont_name" type="text" value=""/></div>
								<div class="field"><label>Your E-mail:<span class="mandatory-star">&nbsp;*</span></label><input name="cont_email" type="text" value=""/></div>
								<div class="field"><label>Your Website:<span class="mandatory-star">&nbsp;*</span></label><input name="cont_website" type="text" value=""/></div>
								<div class="field"><label>Your message:<span class="mandatory-star">&nbsp;*</span></label><textarea name="cont_message"></textarea></div>
							   <div class="wrapper"><div class="button"> <input name="cont_submit" type="submit" value="Submit"></div></div>

						<!--		<div class="wrapper">
									<div class="button"><span><span><a href="#" onclick="document.getElementById('contacts-form').submit()">Send Your Message!</a></span></span></div>
								</div> -->
								
							</fieldset>
						</form>
					</div>
					<div>
					<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=216420703386929553241.0004bf03fd7f4bea6741e&amp;ie=UTF8&amp;ll=13.413694,80.126746&amp;spn=0,0&amp;t=m&amp;z=13&output=embed"></iframe><br /><small>View <a href="http://maps.google.com/maps/ms?msa=0&amp;msid=216420703386929553241.0004bf03fd7f4bea6741e&amp;ie=UTF8&amp;ll=13.413694,80.126746&amp;spn=0,0&amp;t=m&amp;source=embed" style="color:#0000FF;text-align:left">Ananda Timber Depot</a> in a larger map</small>
					</div>
					<div>
					<p>Ananda Timber Depot</p>
					<span>#32 G.N.T. Road, Gummidipundi, Thiruvallur District, Tamil Nadu, Pin - 601201</span>
					</div>
				</div>
			<div class="clear"></div>
			</div>
		</div>
		<!-- // Content area -->
		<div class="clear"></div>
		<!-- Footer -->
		<div class="footer">
			Copyrights @ www.anandhatimberdepot.com
		</div>
		<!-- // Footer -->
		<div class="clear"></div>
	</div>
</body>
</html>
