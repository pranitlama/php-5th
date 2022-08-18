<?php
function evaluate($name,$attendance,$hygiene,$rating){
if($attendance<80 or $hygiene<50 || $hygiene<80 or $rating<2){
	
    echo"$name you are fired from the Rojan Krina Passal!";
}

else{
    echo"$name not fired";
}

}

evaluate("kusal karki",81,81,3);
?>
