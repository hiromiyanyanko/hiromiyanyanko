<?php
    $string = '100';

    $subject = 5 ; // 教科数
    $japanese = 60 ; // 国語
    $mathematics = 79 ; // 数学
    $science = 58 ; // 理科
    $society = 73 ; // 社会
    $english =67 ; // 英語
    $totalScore_MrA = $japanese + $mathematics + $science + $society + $english ; // A君の合計点
    $totalScore_MrA_Average = $totalScore_MrA / $subject ; // A君の平均点
    $totalScore_all_Average = 67.3 ; // 全体の平均点

    $case = 1;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskBranch</title>
</head>
<body>
    <p><?php
        echo('文字列型の変数' . $string . '<br>' );
        echo('<br>課題1-1:<br>');
        if($string == 100) {
            echo('$string100は100です。<br>');
        } else {
            echo('$string100は100ではありません。<br>');
        }

        echo('<br>課題1-2:<br>');
        if($string === 100) {
            echo('$string100は数字の100です。<br>');
        } else {
            echo('$string100は100は数字の100ではありません。<br>');
        }

        echo('<br>課題1-3:<br>');
        if($string > 100) {
            echo('$string100は101以上です。<br>');
        } else {
            echo('$string100は101以上ではありません。<br>');
        }

        echo('<br>課題1-4:<br>');
        if($string >= 100) {
            echo('$string100は100以上です。<br>');
        } else {
            echo('$string100は100以上ではありません。<br>');
        }

        echo('<br>A君の国語' .$japanese . 
                    '点 数学' .$mathematics .
                    '点 理科' .$science .
                    '点 社会' .$society .
                    '点 英語' .$english .
                    '点');

        echo('<p>課題2-1:<br>A君の平均点は' . $totalScore_MrA_Average . '点です。');
        
        echo('<p>課題2-2:<br>A君の平均点を全体の平均点と比較し、<br>');
        $totalScore_MrA_Average = rand(1,100);
        if($totalScore_MrA_Average >= 63.7) {
            echo('A君の平均点は' . $totalScore_all_Average . '以上です。<br>');
        } else {
            echo('A君の平均点は' . $totalScore_all_Average . '未満です。<br>');
        }

        echo('<p>課題3-1:<br>');
        switch ($case ) {
            case true:
                echo 'bool';
                break;
            
            case 1:
                echo 'int';
                break;

            default:
                echo 'other';
        }
        
        echo('<p>課題3-2:<br>');
        switch ($case ) {
            case $case === true:
                echo 'bool';
                break;
            
            case $case === 1:
                echo 'int';
                break;

            case $case === '1':
                echo 'string';
                break;

            default:
                echo 'other';
        }
         ?></p>
</body>
<body>
</body>
</html>