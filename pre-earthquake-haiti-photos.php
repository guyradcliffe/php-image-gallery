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
$counter = "";

function makeGallery ($pageNum,$countLow,$countHigh) {
  if ($_GET['page']==$pageNum) {
  	if ($thumbs = opendir('travel-photos/images-haiti')) {
  		$pix = opendir('travel-photos/images-haiti');
      	while (false !== ($thumbnail = readdir($thumbs)) && false !== ($pic = readdir($pix))) {
          	$counter++;	
          	if ($counter > $countLow && $counter < $countHigh) {
          		echo "<a href='travel-photos/images-haiti/" . $pic . "' rel='prettyPhoto[haiti]' title='";
          		//add caption to each photo 
          		include ("captions.php");
              foreach ($captionarray as $key => $caption) {
                if ($key === $counter) {
                  echo $caption;
                  }
              }
              echo "'><img src='travel-photos/images-haiti/" . $thumbnail . "' style='width:150px; margin:0 20px 15px 0;' alt='Alt text' /></a>\n";
  			    }
      	}
      	closedir($thumbs);
  	}
  } 
}

makeGallery (1,2,15);
makeGallery (2,14,27);
makeGallery (3,26,39);
makeGallery (4,38,51);
makeGallery (5,50,63);
makeGallery (6,62,75);
makeGallery (7,74,87);
makeGallery (8,86,99);
makeGallery (9,98,111);
makeGallery (10,110,123);
makeGallery (11,122,135);
makeGallery (12,134,147);
makeGallery (13,146,159);
makeGallery (14,158,171);
makeGallery (15,170,183);
makeGallery (16,182,195);
makeGallery (17,194,207);
makeGallery (18,206,219);
makeGallery (19,218,231);
makeGallery (20,230,243);
makeGallery (21,242,255);
makeGallery (22,254,267);

echo "<ul style='list-style:none; display:inline;'>";
	for ($pagenumber = 1; $pagenumber < 22; $pagenumber ++) {
		echo "<li style='display:inline; margin-right:15px;'><a href='pre-earthquake-haiti-photos.php?page=" . $pagenumber . "'>" .  $pagenumber . "</a></li>";
    }
echo "</ul>";

echo "</div>";// end div right
 include ("common/footer.php");
?>