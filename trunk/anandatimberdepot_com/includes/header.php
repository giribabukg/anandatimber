<!--  jQuery library -->

<script type="text/javascript" src="js/libs/jquery-1.4.2.min.js"></script>

<!-- For menu -->
<link type="text/css" rel="stylesheet" href="css/dcmegamenu.css"/>
<script type="text/javascript" src="js/libs/jquery_menu/jquery.dcmegamenu.1.3.3.js"></script>
<script type="text/javascript" src="js/libs/jquery_menu/jquery.hoverIntent.minified.js"></script>
<link href="css/skins/grey.css" rel="stylesheet" type="text/css" />

<!-- contact us form script -->
<link rel="STYLESHEET" type="text/css" href="css/contact.css" />
<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<script type='text/javascript' src='scripts/fg_captcha_validator.js'></script>


<!-- siddarth style sheet -->
<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />



<!-- side menu jquery effect-->
<script type="text/javascript" src="js/sliding_effect.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles_right_side_menu.css" />

<!-- breadcrumb css-->
<link rel="stylesheet" type="text/css" href="css/breadcrumb.css" />


<!--  right side image slider box -->
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>

<!-- new banner files-->
    <link rel="stylesheet" href="css/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<!--    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />  -->
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<link rel="shortcut icon" href="favicon.ico" />

<style type="text/css">
.jcarousel-skin-tango .jcarousel-container-horizontal {
    width: 75%;
}
.jcarousel-skin-tango .jcarousel-clip-horizontal {
    width: 100%;
}
.jcarousel-skin-tango .jcarousel-clip-horizontal .jcarousel-item-horizontal{
	height: 150px;
}
</style>

<script type="text/javascript">

jQuery(document).ready(function() {

	$('#slider').nivoSlider();

	//Jcarousel slider
	$('#mega-menu-3').dcMegaMenu({
		rowItems: '1',
		speed: 'fast',
		effect: 'fade'
	});

	$('#right-side-slideshow').cycle({ 
		fx:      'turnDown', 
		delay:   -4000 
	});


});
</script>


<!--Start of Zopim Live Chat Script-->

<!-- <script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?AFFcFP7jSw5t161wghw1kRMWQ4Ntnh0e';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>  -->
<!--End of Zopim Live Chat Script-->