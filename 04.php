<?php include_once("header.php"); ?>
   
<h1>GET<h1>

<p>Choisissez votre dragon: <p>

<ul>
    <li><a href="04.php?color=black">black</a></li>
     <li><a href="04.php?color=pink">pink</a></li>
      <li><a href="04.php?color=yellow">yellow</a></li>
</ul>

<form method="get" action="04.php">

<label for="color">Dragons ?</label>
<input name="color" id="color" type="text" />
<button type="submit">Chercher</button>


</form>

<form method="get" action="04.php">

<select name="color">
    <option value="green">Vert</option>
    <option value="purple">Violet</option>
    <option value="blue">bleu</option>
</select>
<button type="submit">Chercher</button>

</form>

<?php


$url= "https://img.att.ovh/dragons/";


// SUPER variables : $_GET / $_POST / $_SERVER

// print_r = readable
//print_r($_GET); // permettre de recup des info transmises en GET 
//print_r($_POST); // permettre de recup des info transmises en POST
// print_r($_SERVER);


if (isset($_POST['color'])) {
print('<img src="'. $url . $_POST['color'].'.jpg "alt="" />');
} // Reception en POST




if (isset($_GET['color'])) {
print($_GET['color']);
print('<img src="'. $url . $_GET['color'].'.jpg "alt="" />');
} else {
    print('choisissez un dragon!');
} // Reception en GET 


?>




<?php include_once("footer.php"); ?>