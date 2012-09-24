<?php
include("common/header.php");
?>
<div id="leftdiv">
	<div class="mapholder">
		<h5 style="color:#2a2a2a; margin-bottom:7px;">Where is Port-au-Prince?</h5>
		<iframe width="230" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;t=m&amp;ll=18.427502,-72.103271&amp;spn=1.823901,2.515869&amp;z=7&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;t=m&amp;ll=18.427502,-72.103271&amp;spn=1.823901,2.515869&amp;z=7&amp;source=embed" style="color:#0000FF;text-align:left"target="_blank">View Larger Map</a></small>
	</div>
	<div class="adspacer"></div>
	<script type="text/javascript"><!--
google_ad_client = "ca-pub-4537884625055504";
/* 200 x 200 */
google_ad_slot = "2212442369";
google_ad_width = 200;
google_ad_height = 200;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<div class="adspacer"></div>

<script type="text/javascript"><!--
					google_ad_client = "ca-pub-4537884625055504";
					/* 234 x 60 Half Banner */
					google_ad_slot = "6076138034";
					google_ad_width = 234;
					google_ad_height = 60;
					//-->
				</script>
				<script type="text/javascript"
					src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
				<div class="adspacer"></div>

</div><!-- end leftdiv -->
<div id="rightdiv">
	<h1 style="font-size:24px; margin-bottom:5px;">Pre Earthquake Haiti Photos</h1>
	<p>
		I made several trips from Philadelphia to Port-au-Prince, Haiti between 2002 and 2004.
	</p>

<?php
echo "<ul style='list-style:none; display:block; margin:10px 0; height:20px;'>";
	for ($pagenumber = 1; $pagenumber < 22; $pagenumber ++) {
		echo "<li style='display:inline; margin-right:15px;'><a href='pre-earthquake-haiti-photos.php?page=" . $pagenumber . "'>" .  $pagenumber . "</a></li>";
    }
echo "</ul>";
$page = (int)$_GET['page'];
if ($_GET['page']==1) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 2 && $counter < 15) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}
} elseif ($_GET['page']==2) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 14 && $counter < 27) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==3) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 26 && $counter < 39) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==4) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 38 && $counter < 51) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==5) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 50 && $counter < 63) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==6) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 62 && $counter < 75) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==7) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 74 && $counter < 87) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==8) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 86 && $counter < 99) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==9) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 98 && $counter < 111) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==10) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 110 && $counter < 123) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==11) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 122 && $counter < 135) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==12) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 134 && $counter < 147) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==13) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 146 && $counter < 159) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==14) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 158 && $counter < 171) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==15) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 170 && $counter < 183) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==16) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 182 && $counter < 205) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==17) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 204 && $counter < 217) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==18) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 216 && $counter < 229) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==19) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 228 && $counter < 241) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==20) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 240 && $counter < 253) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} elseif ($_GET['page']==21) {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 252 && $counter < 265) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}	
} else {
	if ($thumbs = opendir('travel-photos/images-haiti')) {
		$pix = opendir('travel-photos/images-haiti');
    	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
        	$counter++;		
        	if ($counter > 2 && $counter < 15) {
        		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title=''><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' /></a>\n";
			}
    	}
    	closedir($thumbs);
	}
}
echo "<ul style='list-style:none; display:inline;'>";
	for ($pagenumber = 1; $pagenumber < 22; $pagenumber ++) {
		echo "<li style='display:inline; margin-right:15px;'><a href='pre-earthquake-haiti-photos.php?page=" . $pagenumber . "'>" .  $pagenumber . "</a></li>";
    }
echo "</ul>";

echo "</div>";// end div right
 include ("common/footer.php");
?>