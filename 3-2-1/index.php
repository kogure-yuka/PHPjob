<?php
    $testFile = "test.txt";
    $contens = "こんにちは！";
    
    if (is_writable($testFile)) {

        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($testFile, "w");
        // 対象のファイルに書き込む
        fwrite ($fp, $contens);
        
        // ファイルを閉じる
        fclose($fp);
        //書き込みした旨の表示
        echo "finish writing!";
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
?>

<?php
    $test_file = "test2.txt";
    
    if (is_readable($test_file)) {
        // 書き込み可能なときの処理
        // 対象のファイルを開く
        $fp = fopen($test_file, "r");
        // 開いたファイルから１行ずつ読み込む
        while ($line = fgets($fp)){
            echo $line.'<br>';
        }
        // ファイルを閉じる
        fclose($fp);
    } else {
        // 書き込み不可のときの処理
        echo "not writable!";
        exit;
    }
    ?>