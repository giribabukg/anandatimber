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
		<li ><a href="index.php">Home</a></li>
		<li>Contact Us</li>
	</ul>
<?php
} elseif($file_name == 'ananda_saw_mill') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li>Ananda Saw Mill</li>
	</ul>
<?php } elseif($file_name == 'ananda_saw_mill') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li ><a href="ananda_saw_mill.php">Ananda Saw Mill</a></li>
		<li>Ananda Saw Mill</li>
	</ul>
<?php } elseif($file_name == 'wood_work_machines') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li><a href="ananda_saw_mill.php">Ananda Saw Mill</a></li>
		<li>Wood Work Machines</li>
	</ul>
<?php
} elseif($file_name == 'ananda_timber_depot') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li>Ananda Timber Depot</li>
	</ul>
<?php } elseif($file_name == 'imported_woods') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li ><a href="ananda_timber_depot.php">Ananda Timber Depot</a></li>
		<li>Imported Woods</li>
	</ul>
<?php } elseif($file_name == 'plywoods') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li ><a href="ananda_timber_depot.php">Ananda Timber Depot</a></li>
		<li>Plywoods</li>
	</ul>
<?php } elseif($file_name == 'laminates') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li ><a href="ananda_timber_depot.php">Ananda Timber Depot</a></li>
		<li>Laminates</li>
	</ul>
<?php } elseif($file_name == 'aluminium_metal_sheets') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li ><a href="ananda_timber_depot.php">Ananda Timber Depot</a></li>
		<li>Aluminium Metal Sheets</li>
	</ul>
<?php } elseif($file_name == 'design_molding_beedings') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li ><a href="ananda_timber_depot.php">Ananda Timber Depot</a></li>
		<li>Designer / Molding Beadings</li>
	</ul>
<?php } elseif($file_name == 'ananda_furniture') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li ><a href="ananda_timber_depot.php">Ananda Timber Depot</a></li>
		<li>Ananda Furniture</li>
	</ul>
<?php
} elseif($file_name == 'imported_woods_furniture') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li><a href="ananda_furniture.php">Ananda Furniture</a></li>
		<li>Imported Wood Furniture</li>
	</ul>
<?php
} elseif($file_name == 'tiles_and_sanitary') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li><a href="ananda_furniture.php">Ananda Furniture</a></li>
		<li>Tiles and Sanitary Ware</li>
	</ul>
<?php
} elseif($file_name == 'hardwares') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li><a href="ananda_furniture.php">Ananda Furniture</a></li>
		<li>Hardware</li>
	</ul>
<?php
} elseif($file_name == 'readymade_doors') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li><a href="ananda_furniture.php">Ananda Furniture</a></li>
		<li>Readymade Doors</li>
	</ul>
<?php
} elseif($file_name == 'glass') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li><a href="ananda_furniture.php">Ananda Furniture</a></li>
		<li>Glass</li>
	</ul>
<?php
} elseif($file_name == 'about_us') { ?>
	<ul id="breadcrumbs">
		<li ><a href="index.php">Home</a></li>
		<li>About Us</li>
	</ul>
<?php
} 
?>