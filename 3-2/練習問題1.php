<?php
//フルーツと単価の連想配列
$fruits=["りんご"=>150,"みかん"=>50,"もも"=>500];
//個数の配列
$quantity=[2,3,6];

//単価を計算する関数を定義
function getprice($count,$price){
   //返り値は合計値を返す
   return $count*$price;
}

$sum=getprice(2,150);
   echo 'りんごは'.$sum.'円です。<br>';

$sum=getprice(3,50);
   echo 'みかんは'.$sum.'円です。<br>';

$sum=getprice(6,500);
   echo 'ももは'.$sum.'円です。<br>';

?>


