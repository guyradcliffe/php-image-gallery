<?php

if ($thumbs = opendir('travel-photos/images-haiti')) {
$pix = opendir('travel-photos/images-haiti');
    while (false !== ($thumbnail = readdir($thumbs))&& false !== ($pic = readdir($pix))) {
        $counter++;
        if ($counter > 48 && $counter < 60) {
        echo "<a href='travel-photos/images-haiti/" . $pic . "'><img src='travel-photos/images-haiti/" . $thumbnail . "' /></a>\n";
        }
    }
    closedir($thumbs);
    echo $counter;
}
?>
