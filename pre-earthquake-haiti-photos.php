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
	for ($pagenumber = 1; $pagenumber < 23; $pagenumber ++) {
		echo "<li style='display:inline; margin-right:15px;'><a href='pre-earthquake-haiti-photos.php?page=" . $pagenumber . "'>" .  $pagenumber . "</a></li>";
    }
echo "</ul>";
$page = (int)$_GET['page'];
$counter = "";

function makeGallery ($pageNum,$countLow,$countHigh) {
  if ($_GET['page']==$pageNum) {
    $thumbglobs = glob('travel-photos/images-haiti/*');
    foreach ($thumbglobs as $key => $thumbglob) {
      if ($key < $thumbglobs) {
        $counter++;
        if ($counter > $countLow && $counter < $countHigh) {
          echo "<a href='travel-photos/images-haiti/" . substr($thumbglob,27) . "' rel='prettyPhoto[haiti]' style='display:block; height:100px; width:150px; overflow:hidden; margin:0 20px 15px 0; float:left; border:1px solid #000;' title='";
        		include ("pre-earthquake-haiti-photos-captions.php");
            foreach ($captionarray as $key => $caption) {
              if ($key === $counter) {
                echo $caption;
                }
            }
            echo "'><img src='travel-photos/images-haiti/" . substr($thumbglob,27) . "' style='width:150px; border:none;' alt='";
        		include ("pre-earthquake-haiti-photos-alt-tags.php");
            foreach ($alttagsarray as $key => $alttag) {
              if ($key === $counter) {
                echo $alttag;
              }
            }
            echo "' /></a>\n";
        }
      }
    }
  }
}
/* creates a list of the photos and their sequence */
/*$thumbglobs = glob('travel-photos/images-haiti/*');
echo "<ul>";
foreach ($thumbglobs as $key => $thumbglob) {
  if ($key < $thumbglobs) {
     echo "<li>$thumbglob</li>";
  }
}
echo "</ul>";*/
makeGallery(1,0,13);
makeGallery(2,12,25);
makeGallery(3,24,37);
makeGallery(4,36,49);
makeGallery(5,48,61);
makeGallery(6,60,73);
makeGallery(7,72,85);
makeGallery(8,84,97);
makeGallery(9,96,109);
makeGallery(10,108,121);
makeGallery(11,120,133);
makeGallery(12,132,145);
makeGallery(13,144,157);
makeGallery(14,156,169);
makeGallery(15,168,181);
makeGallery(16,180,193);
makeGallery(17,192,205);
makeGallery(18,204,217);
makeGallery(19,216,229);
makeGallery(20,228,241);
makeGallery(21,240,253);
makeGallery(22,252,265);

echo "<ul style='list-style:none; display:inline;'>";
	for ($pagenumber = 1; $pagenumber < 23; $pagenumber ++) {
		echo "<li style='display:inline; margin-right:15px;'><a href='pre-earthquake-haiti-photos.php?page=" . $pagenumber . "'>" .  $pagenumber . "</a></li>";
    }
echo "</ul>";

echo "</div>";// end div right
 include ("common/footer.php");
?>