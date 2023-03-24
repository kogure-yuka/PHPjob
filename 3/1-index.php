<?php
// PHPの研修カリキュラム2-1
?>

<?php
/* PHPの研修カリキュラム1-1　*/
?>

<html>
 <p>I say that <?php
 echo "Hello world!";
 ?><p>
</html>   

<?php
//index.php
$masseag="Helloworld!";
?>

<?php
//index.php
var_dump($masseag);
// 改行
echo '<br>';


$x = 8;
$y = 5.55;
var_dump($x);
// 改行
echo '<br>';
var_dump($y);
?>

<?php
echo '<br>';
$flag =true;
var_dump($flag);
?>
<?php
echo '<br>';
$emp = null;
var_dump($emp);
?>
<?php
echo '<br>';
$en_words ='Hello world!';
var_dump($en_words);
echo '<br>';
$ja_words ='こんにちは';
var_dump($ja_words);

// 変数の展開
echo '<br>';
$a ="yamada";
echo $a;
echo '<br>';
// 変数の展開　ダブルコーテーションで囲まれた変数は置き換わる
$name ='yamada';
echo "こんにちは。 $name さん";
echo '<br>';
$color ='blue';
echo "sky is ${color}color";
?>

<?php
 // index.php
 // 変数：データにつけるラベル（変更可能）
 // 定数:変更不可

 define("ADMIN_EMAIL", "y-i-group.com");
 define("LIST_COUNT",15);
 echo '<br>';
 echo ADMIN_EMAIL; echo '<br>';
 echo LIST_COUNT;
 ?>

<?php
 $age=15;
 echo '<br>';
 if($age>= 20){
    echo"お酒が飲めるぞ";
 }else {
      echo"お酒は二十歳になってから！";
 }

 $age= 27;
 $is_student=true;

 if ($age< 25 || $is_student){
    echo '学割パックが使えるよ';
 }
  ?>

<?php
 $blood = 'A';
 switch($blood){
    case'A':
    print'A型です';
    break;
    case'B':
        print'B型です';
       break;
        case'AB':
            print'AB型です';
            break;
            case'O':
                print'O型です';
                break;
                default:
                echo 'A/B/O/ABから選択してください';
 }
 ?>

 <?php

 $name="";
 if($name !=""){
    echo '名前を受け付けました';
 }
 else {
    echo '名前を入力してください';
 }

 $name="";
 echo($name !="")?'名前を受け付けました':'名前を入力してください';
  ?>
  <?php
  $string ='1';
  $int =1;

  if(1===$string){
    echo'変数stringはint型です';
  }else{
    echo'変数stringはstring型です';
  }
  //[変数stringはstring型です]が出力される
  
  if(1===$int){
   echo '変数stringはint型です';
  }else{
   echo'変数stringはstring型です';
  }
//[変数stringはint型です]が出力される
?>

<?php
 echo '<br>';
$num = 0;
while($num < 10){
  echo $num;
   $num++;
}

echo '<br>';
$num = 0;
do {
   echo $num;
   $num++;
} while($num < 10)
?>

<?php

for($i=0;$i<10;$i++){
   echo $num;
}
?>

<?php
$num=0;
while($num <101){
   echo $num;
   echo '<br>';
   $num++;
   if($num == 101){
      break;
   }
}

