<?php
$file_name = '';
$file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php");
if($file_name == 'index'){ ?>
	<ul id="breadcrumbs">
		<li>Home</li>
	</ul>
<?php
} elseif($file_name == 'contact_us'){ ?>
	<ul id="breadcrumbs">
		<li ><a href="#">Home</a></li>
		<li>Contact Us</li>
	</ul>
<?php
} elseif($file_name == 'ananda_saw_mill') { ?>
	<ul id="breadcrumbs">
		<li ><a href="#">Home</a></li>
		<li ><a href="#">Ananda Timber Depot</a></li>
		<li>Ananda Saw Mill</li>
	</ul>
<?php } elseif($file_name == 'ananda_timber_depot') { ?>
	<ul id="breadcrumbs">
		<li ><a href="#">Home</a></li>
		<li ><a href="#">Ananda Timber Depot</a></li>
		<li>Ananda Timbers</li>
	</ul>
<?php } elseif($file_name == 'ananda_traders') { ?>
	<ul id="breadcrumbs">
		<li ><a href="#">Home</a></li>
		<li ><a href="#">Ananda Timber Depot</a></li>
		<li>Ananda Traders</li>
	</ul>
<?php
} elseif($file_name == 'ananda_furniture') { ?>
	<ul id="breadcrumbs">
		<li ><a href="#">Home</a></li>
		<li ><a href="#">Ananda Timber Depot</a></li>
		<li>Ananda Furniture</li>
	</ul>
<?php
} elseif($file_name == 'about_us') { ?>
	<ul id="breadcrumbs">
		<li ><a href="#">Home</a></li>
		<li>About Us</li>
	</ul>
<?php
}
?>