
  <?php

$quantity=['りんご'=>2,'みかん'=>3,'もも'=>6];
$price=['りんご'=>150,'みかん'=>50,'もも'=>500];

  foreach($quantity as $key=>$value){
    $result=$value* $price[$key];

   echo $key."は".$result."円です。";
   echo'<br>';
  }

?>
