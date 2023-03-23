<?php
$contries =["America","japan","China","Korea"];

echo $contries[0];
echo $contries[1];
echo $contries[2];
echo $contries[3];

var_dump($contries);
echo'<br>';

$fruits =["りんご","みかん","ぶどう"];
echo $fruits[0];
echo'<br>';
echo $fruits[1];
echo'<br>';
echo $fruits[2];
echo'<br>';

var_dump($fruits);
echo'<br>';

$fruits=["apple"=>"りんご","orange"=>"みかん","grape"=>"ぶどう"];
$fruits["peach"]="もも";

echo $fruits["apple"];
echo $fruits["orange"];
echo $fruits["grape"];

var_dump($fruits);

echo'<br>';
$color =["red"=>"赤","blue"=>"青","green"=>"緑"];
$color["yellow"]="黄色";

echo $color["red"];
echo $color["blue"];
echo $color["green"];

var_dump($color);

echo'<br>';
$fruits=["りんご","みかん","もも"];
foreach($fruits as $value){
   echo $value;
}

$fruits=["apple"=>"りんご","orange"=>"みかん","peach"=>"もも"];
foreach($fruits as $key=>$value){
   echo'<br>';
   echo $key;
   echo"といったら";
   echo $value;
}

function getTraiangleArea($base,$height){
   $area=$base*$height / 2;
   print"三角形の面積は".$area."だよ。";
}
   echo'<br>';
   getTraiangleArea(10,5);
   echo'<br>';
   getTraiangleArea(15,8);
   echo'<br>';
   getTraiangleArea(8,6);


   function sayHi($name ="goto"){
      $myname ="php";
      return "Hi!".$name."from".$myname;
   }
   
   echo sayHi();
   ?>


<?php
function getvolume($length,$width,$height){
  $volume=$length*$width*$height;
   print"直方体の体積は".$volume."だよ。";
}
   echo'<br>';
   getvolume(5,10,8);
   ?>

  
