<?php
function evaluate($name,$attendance,$hygiene,$rating){
if($attendance<80 || $hygiene<50 || $rating<3 ){
    echo $name.",you are fired from the Rojan Krina Passal!";
}
else{
    echo $name."Not Fired for now";
}

}

evaluate("kusal karki",2,7,3);
?>