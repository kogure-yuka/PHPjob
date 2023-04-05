<?php
$number = $_POST['number'];
?>
<p><?php echo date("Y/m/d");?>の運勢は</p>
  <!-- <?php
$text = $number;
$split_str = str_split($text);
var_dump($split_str);
$key = array_rand($split_str, 1); ?> -->
<p>選ばれた数字は<?php print $split_str[$key];
    echo '<br>';
    $num = $split_str[$key]; 
    
    if($num == 0){
        echo "凶";
    }elseif($num> 0 && $num <= 3){
         echo "小吉";
    }elseif($num > 3 && $num <= 6){
        echo "中吉";
    }elseif($num > 6 && $num <= 8){
        echo "吉";
    }else{
        echo "大吉";
    }

    ?></p>

 