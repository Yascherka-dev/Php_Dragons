<?php include_once("header.php"); ?>
   
<h1>Les Fichiers<h1>

<form method="post" action="06.php">
    <label for="text">Entrez du texte </label>
<textarea type="text" name="text" id="text"></textarea>
<button>Validez</button>
</form>

<?php

$fileName = "notes.txt";



if(isset($_POST["text"]) and !empty($_POST["text"])){
    print_r($_POST['text']);



    // ouverture du fichier 

    $file = fopen($fileName, 'a') or die("Error");

    // ecriture dans le fichier 

    fwrite($file, $_POST["text"]);
    fwrite($file, "\n\n");

    // fermeture du fichier 

    fclose($file);

}

// ouvrir le fichier en lecture 

    $file = fopen($fileName, 'r') or die("Error");

    // Lire dedans

    $content = fread($file, filesize($fileName));

    // le fermer 

    fclose($file);

    // affiche son contenu 

    print($content);
    print(nl2br($content));

    // fopen, fwrite , fclose

    $content= file_get_contents($fileName);
      print(nl2br($content));


?>




<?php include_once("footer.php"); ?>