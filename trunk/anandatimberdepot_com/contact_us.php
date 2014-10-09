<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./includes/fgcontactform.php");
require_once("./includes/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('giribabukg@gmail.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('gf07a2Kt5ORGXWz');

//3. Set Conditional field and conditional receipients
//Update the destination email addresses
$formproc->SetConditionalField('query_type');
$formproc->AddConditionalReceipent('General','general@your-website.com');
$formproc->AddConditionalReceipent('Sales','sales@your-website.com');
$formproc->AddConditionalReceipent('Billing','billing@your-website.com');
$formproc->AddConditionalReceipent('Technical','technical@your-website.com');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Anandha Timber Depot</title>
<meta	name="generator" content="editplus"	/>
<meta	name="author" content="" />
<meta	name="keywords"	content="" />
<meta	name="description" content="" />
<?php include_once('includes/header.php');	?>

</head>

<body>
<div id="main-container"> 
  <!-- Header -->
  <div class="header">
    <div class="page-wrap">
      <div class="header-left"><img src="images/atb.jpg" alt="Anandha Timber Depot" title="Anandha Timber Depot" /></div>
      <div class="header-right"> <i>For Support</i><br />
        <b>Call:</b> 9000000000 </div>
      <div class="clear"></div>
	  <?php include_once('includes/main_menu.php'); ?>
      <div class="clear"></div>
	  <?php include_once('includes/main_banner.php'); ?>
      <!-- // Menu -->
      <div class="clear"></div>
    </div>
  </div>
  <!-- // Header -->
  <div class="clear"></div>
  <!-- Content area -->
  <div class="home-mid-container">
    <div class="page-wrap">
      <div class="home-mid-left">
	  <?php include_once('includes/breadcrumb.php'); ?>
<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<h1>Contact us</h1>

<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' >Your Full Name*: </label><br/>
    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='contactus_name_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='email' >Email Address*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='query_type' >Query Type:</label><br/>
    <select name='query_type'>
        <option>General</option>
        <option>Sales</option>
        <option>Billing</option>
        <option>Technical</option>
    </select>
    <span id='contactus_email_errorloc' class='error'></span>
</div>
<div class='container'>
    <label for='message' >Message:</label><br/>
    <span id='contactus_message_errorloc' class='error'></span>
    <textarea rows="10" cols="50" name='message' id='message' style="width: 271px; height: 130px;"><?php echo $formproc->SafeDisplay('message') ?></textarea>
</div>
<div class='container'>
    <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
    <label for='scaptcha' >Enter the code above here:</label>
    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
    <span id='contactus_scaptcha_errorloc' class='error'></span>
    <div class='short_explanation'>Can't read the image?
    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
</div>


<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>

</fieldset>
</form>
<div class="timber-address">
	<address>
	Ananda Timber Depot
	#156 G.N.T. Road
	Gummidipundi
	Thiruvallur Distric
	Pin - 601201
	Mobile: 0999123456
	Telephone/Fax: 044 2792 1234/2792 5678
	Email: admin@anandatimberdepot.com

	</address>
</div>
<!-- <address>
Ananda Traders
#156 G.N.T. Road
Gummidipundi
Thiruvallur Distric
Pin - 601201

</address>
<address>
Ananda Saw Mill
#156 G.N.T. Road
Gummidipundi
Thiruvallur Distric
Pin - 601201

</address>
<address>
Ananda Furniture
#156 G.N.T. Road
Gummidipundi
Thiruvallur Distric
Pin - 601201

</address> -->


	  </div>
	   <?php include_once('includes/right_side_content.php'); ?>
      <div class="clear"></div>
    </div>
  </div>
  <!-- // Content area -->
  <div class="clear"></div>
  <!-- Footer -->
  <?php include_once('includes/footer.php'); ?>
  <!-- // Footer -->
  <div class="clear"></div>
</div>
</body>
</html>
<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("contactus");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactus'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactus'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactus'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>
