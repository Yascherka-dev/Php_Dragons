<?php include_once("header.php"); ?>
   
<h1>Les tests<h1>

<div id="divDragon">
<?php 

$url= "https://img.att.ovh/dragons/";

// tableau liste 

$dragons = array("pink.jpg", "black.jpg", "blue.jpg","green.jpg","orange.jpg","purple.jpg","red.jpg","white.jpg", "yellow.jpg",);

for ($i = 0; $i < count($dragons); $i++) {
//print($url . $dragons[$i]);

print('<img src="'. $url . $dragons[$i]. '" alt="" />');

}

?>
</div>

<?php include_once("footer.php"); ?>