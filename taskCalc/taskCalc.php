<?php

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskCalc</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
    <p><?php echo('(1 + 3 ) × 5 = ' . (1+3)*5 . 'です。');  ?></p>
    <p><?php echo('22 ÷ 3 = ' . round(22/3,3) . 'です。'); ?></p>
    <p><?php echo('22 ÷ 3 = ' . ceil(22/3) . 'です。'); ?></p>
    <p><?php echo('22 ÷ 3 = ' . floor(22/3) . 'です。'); ?></p>
    <p><?php echo('5 ÷ 36 = ' .round(5/36,2) . 'なので14%です。'); ?></p>
</body>
</html>