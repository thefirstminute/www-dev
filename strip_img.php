<?php
$images = glob('*.jpg');
foreach($images as $image) {
  try {
    $img = new Imagick($image);
    $img->stripImage();
    $img->writeImage($image);
    $img->clear();
    $img->destroy();

    echo "Removed EXIF data from $image";

  } catch(Exception $e) {
    echo 'Exception caught: ',  $e->getMessage();
  }
  echo '<br />';
}
