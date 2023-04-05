<?php
    // 切り上げ
    $x = 5.2;
    echo ceil($x);
    echo'<br>';
    // 切捨て
    $x = 5.2;
    echo floor($x);
    echo'<br>';
    // 四捨五入
    $x =5.2;
    echo round($x);
    echo'<br>';
   
    ?>

    <?php
    echo pi();
    echo'<br>';
    function circleArea($r) {
        $circle_area = $r * $r * pi();
        echo $circle_area; 
    }
    // 半径が2の円の面積の計算
    circleArea(2);
    ?>

    <?php
     echo'<br>';
    echo mt_rand(1,100);
    echo'<br>';
     // 文字の長さ
    $str = "hogehoge";
    echo strlen($str);
    echo'<br>';
    // 文字列の中にある文字が何番目にあるか
    $str="yoneyama";
    echo strpos($str,"a");
    echo'<br>';
    // 文字の切り取り
    $str ="yoneyama";
    echo substr($str,-2,2);
    echo'<br>';
     // 文字の置換
    $str ="yoneyama";
    echo str_replace("neya","NEYA",$str);
    echo'<br>';
     // スペースを置換
    $str ="I am yoneyama";
    echo str_replace(" ","",$str);
    echo'<br>';
     // 日本語マルチバイト文字
     $str ="あいうえお";
     echo mb_strlen($str);
     echo'<br>';
     $name = "米山さん";
     $limit_number = 40;
     $prise = 4000;

     echo $name."の残り時間はあと".$limit_number."です";
     echo'<br>';
     printf("%sの残り時間はあと%dです",$name,$limit_number);
     echo'<br>';
     printf("%sはあと%d時間で%d円の罰金です",$name,$limit_number,$prise);
     echo'<br>';
     $limit_hour = 20;
     $limit_minute = 10;

     printf("残り%02d時間%02d分",$limit_hour,$limit_minute);
     echo'<br>';
     $limit_hour = 4;
     $limit_minute = 4;

     printf("残り%02d時間%02d分",$limit_hour,$limit_minute);

     echo'<br>';
     $limit_hour = 4;
     $limit_minute = 4;

     printf("残り%02d時間%02d分",$limit_hour,$limit_minute);
     echo'<br>';
     //sprintだけでは出力できない
     $limit_time = sprintf("残り%02d時間%02d分",$limit_hour,$limit_minute);
     echo $limit_time;