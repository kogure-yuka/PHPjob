<?php
//フルーツと単価の連想配列
$fruits=["りんご"=>150,"みかん"=>50,"もも"=>500];
//個数の配列
$quantity=[2,3,6];

//単価を計算する関数を定義
function getprice($quantity,$value){
   //返り値は合計値を返す
   return $quantity*$value;
}

$i = 0 ;
foreach ( $fruits as $key => $value ){
   $sum = getprice( $quantity[$i], $value );
   echo $key.'は'.$sum.'円です。<br>';
   $i ++ ;  // 次のフルーツの個数をチェックするために、$iをインクリメントしておく。
}


?>


