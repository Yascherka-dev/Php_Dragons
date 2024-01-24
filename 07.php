<?php include_once("header.php"); ?>
   
<h1>Les fonctions<h1>





<?php

// quoi , qui change ? 
// src, alt, legend 



figure('img/chat1.jpg', 'romulus', 'Le beau chat romulus');
figure('img/chat2.jpg', 'django', 'Le chat de Quentin');
figure('img/dog.jpg', 'OUAF', 'ouafouafouaf');









// addtion 2 nombres 

function add($a, $b) {
    return  $a + $b;


}

$tot = add(12, 45);

print($tot);

print( add(12, 45) - add(15, 5));

?>




<?php include_once("footer.php"); ?>