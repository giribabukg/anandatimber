<?php
$file_name = '';
$file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php");
if($file_name == 'index' || $file_name == 'contact_us'){ ?>
	<div class="home-mid-rgt">
		<ul id="sliding-navigation">
			<li class="sliding-element"><a href="ananda_timber_depot.php">Ananda Timber Depot</a></li>
		<!--	<li class="sliding-element"><a href="#">Ananda Traders</a></li> -->
			<li class="sliding-element"><a href="ananda_furniture.php">Ananda Furniture</a></li>
			<li class="sliding-element"><a href="ananda_saw_mill.php">Ananda Saw Mill</a></li>
		</ul>
	</div>
<?php
} elseif($file_name == 'ananda_furniture'){ ?>
	<div class="home-mid-rgt">
		<ul id="sliding-navigation">
			  <li class="sliding-element"><a href="#">Timber Size</a></li>
			  <li class="sliding-element"><a href="#">House Door Frame</a></li>
			  <li class="sliding-element"><a href="#">Dining Table and Chair</a></li>
			  <li class="sliding-element"><a href="#" class="big-menu">Sofa set, Dressing Table and Marriage Cots</a></li>
		</ul>
	</div>
<?php
} elseif($file_name == 'ananda_saw_mill') { ?>
	<div class="home-mid-rgt">
		<ul id="sliding-navigation">
			  <li class="sliding-element"><a href="#">Timber Logs Yard</a></li>
			  <li class="sliding-element"><a href="#">Wood Cutting</a></li>
		</ul>
	</div>
<?php } elseif($file_name == 'ananda_timber_depot' || $file_name == 'tiles' || $file_name == 'roof_mat' || $file_name == 'doors' || $file_name == 'tata_gi' || $file_name == 'plywoods' || $file_name == 'hardwares' || $file_name == 'elevation' || $file_name == 'glass' || $file_name == 'beedings') { ?>
	<div class="home-mid-rgt">
		<ul id="sliding-navigation">
			  <li class="sliding-element"><a href="tiles.php">Tiles</a></li>
			  <li class="sliding-element"><a href="roof_mat.php">Roofing Materials</a></li>
			  <li class="sliding-element"><a href="tata_gi.php">Tata GI</a></li>
			  <li class="sliding-element"><a href="doors.php">Doors</a></li>
			  <li class="sliding-element"><a href="plywoods.php">Plywoods</a></li>
			  <li class="sliding-element"><a href="hardwares.php">Hardwares</a></li>
			  <li class="sliding-element"><a href="elevation.php">Elevation</a></li>
			  <li class="sliding-element"><a href="glass.php">Glass</a></li>
			  <li class="sliding-element"><a href="beedings.php">Beedings</a></li>






<!--			  <li class="sliding-element"><a href="#">Saw Mill</a></li>
			  <li class="sliding-element"><a href="#">Painting & Designing Works</a></li>  -->
<!--		  <li class="sliding-element"><a href="#">Burma Teak</a></li>
			  <li class="sliding-element"><a href="#">Teak</a></li>
			  <li class="sliding-element"><a href="#">Vengai</a></li>
			  <li class="sliding-element"><a href="#">Kongu</a></li>
			  <li class="sliding-element"><a href="#">Padak</a></li>
			  <li class="sliding-element"><a href="#">Neem Wood</a></li>
			  <li class="sliding-element"><a href="#">Silver Wood</a></li>
			  <li class="sliding-element"><a href="#">Pine Wood</a></li>
			  <li class="sliding-element"><a href="#">Ceramic Tiles</a></li>
			  <li class="sliding-element"><a href="#">Vertified Tiles</a></li> -->
<!--			  <li class="sliding-element"><a href="#">Wall Tiles</a></li>
			  <li class="sliding-element"><a href="#">Decorative Teracotta Tiles</a></li>
			  <li class="sliding-element"><a href="#">Charminar Everest & Swastic A/C Sheet</a></li>
			  <li class="sliding-element"><a href="#">Tata G.I. Metal Sheet & Color Sheets</a></li>  -->
		</ul>
	</div>
<?php } elseif($file_name == 'ananda_traders') { ?>
	<div class="home-mid-rgt">
		<ul id="sliding-navigation">
			  <li class="sliding-element"><a href="#">Green Plywood & Commercial Plywood Modiguard</a></li>
			  <li class="sliding-element"><a href="#">Saint Gobian Glass</a></li>
			  <li class="sliding-element"><a href="#">Mica</a></li>
			  <li class="sliding-element"><a href="#">P.V.C. Door</a></li>
			  <li class="sliding-element"><a href="#">G.I. Pipes</a></li>
			  <li class="sliding-element"><a href="#">P.V.C. Beadings</a></li>
		</ul>
	</div>
<?php
}
?>
	<div class="home-mid-rgt">
			<div class="small-headings"><span>A</span>ll Products</div>
			<form id="joinus-email">
				<select>
					<option>Please select...</option>
					  <option value="www.anandatimberdepot.com">Saw Mill</option>
					  <option>Painting & Designing Works</option>
					  <option>Burma Teak</option>
					  <option>Teak</option>
					  <option>Vengai</option>
					  <option>Kongu</option>
					  <option>Padak</option>
					  <option>Neem Wood</option>
					  <option>Silver Wood</option>
					  <option>Pine Wood</option>
					  <option>Ceramic Tiles</option>
					  <option>Vertified Tiles</option>
					  <option>Wall Tiles</option>
					  <option>Decorative Teracotta Tiles</option>
					  <option>Charminar Everest & ...</option>
					  <option>Tata G.I. Metal Sheet...</option>
					  <option>Green Plywood & Com...</option>
					  <option>Saint Gobian Glass</option>
					  <option>Mica</option>
					  <option>P.V.C. Door</option>
					  <option>G.I. Pipes</option>
					  <option>P.V.C. Beadings</option>
					  <option>Timber Size</option>
					  <option>House Door Frame</option>
					  <option>Dining Table and Chair</option>
					  <option>Sofa set, Dressing...</option>
					  <option>Timber Logs Yard</option>
					  <option>Wood Cutting</option>

				</select>
				<input type="submit" value="Go..."/>
			</form>
	</div>
	<div class="home-mid-rgt">
		<div class="small-headings2"><span>J</span>oin us in our <span>e</span>mail list</div>
		<form id="joinus-email">
			<input type="text" name="email"/>
			<input type="submit" value="Go..."/>
		</form>
	</div>
	<div class="home-mid-rgt">
		<div class="small-headings3"><span>L</span>atest News</div>

		<div class="ul-latest-news">
			<ul>
				<li>We are doing great jobs Timber depot</li>
				<li>Delivering quality is our great auspicious</li>
				<li>We do most of the things at timbers</li>
				<li>Export quality is speciality</li>
				<li>Saw mill is one of our great project</li>
			</ul>
		</div>

	</div>


<?php
if($file_name == 'index' || $file_name == 'contact_us'){ ?>
	<div class="home-mid-rgt-no-padding">
		<div id="right-side-slideshow" style="position: relative;">
				<img height="208" width="208" src="images/11.jpg" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 217px; height: 208px;border-radius:10px;">
				<img height="208" width="208" src="images/22.jpg" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 217px; height: 208px;border-radius:10px;">
				<img height="208" width="208" src="images/33.jpg" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 6; opacity: 1; width: 217px; height: 208px;border-radius:10px;">
				<img height="208" width="208" src="images/11.jpg" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 217px; height: 208px;border-radius:10px;">
				<img height="208" width="208" src="images/22.jpg" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 5; opacity: 0; width: 217px; height: 208px;border-radius:10px;">
		</div>
	</div>
<?php
}
?>
