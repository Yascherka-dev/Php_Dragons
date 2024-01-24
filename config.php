<?php

function figure($src, $alt, $legend){
    
print('<figure>
<figcaption>"'.$legend.'"</figcaption>
    <img src="'.$src.'" alt="'.$alt.'">
</figure> ');

}

?>