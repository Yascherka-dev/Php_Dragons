<?php include_once("header.php"); ?>
   
<h1>Les Dossiers<h1>

<?php

$dir = "./gallery";

$files = scandir($dir);

foreach ($files as $file){

    $path = $dir . "/". $file;

    if (is_file($path) and getimagesize($path)){
  print "<p>". $file . "</p>";
  $size= getimagesize($path);
$weight = filesize($path);
$date = filemtime($path);
$date = date("Y-m-d H:i:s", $date);


  print_r($size);
  print "<p>Largeur ". $size[0]. "</p>";
  print "<p>Hauteur ". $size[1]. "</p>";
  print "<p>Poids  ". $weight. "</p>";
  print "<p>Date  ". $date. "</p>";

  print"<p> <img src='". $path ."'alt='' width='200'/></p>";

    }
}

print '<pre>';
print_r($files);
print '<pre>';

?>




<?php include_once("footer.php"); ?>