
<?php

function getprice($quantity,$unitprice){
  $price =$quantity * $unitprice;

  $fruits=["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];

  foreach($fruits as $key=>$value){

  echo $value."は".$price."円です。";
  echo'<br>';
 
}
}

getprice(2,150);
getprice(3,50);
getprice(6,500);
echo'<br>';

?>


<?php
function fruits($fruit,$count,$price){
   echo $fruit.'は'.$count*$price.'円です。<br>';
  }
  
   fruits('りんご',2,150);
   fruits('みかん',3,50);
   fruits('もも',6,500);
   ?>


