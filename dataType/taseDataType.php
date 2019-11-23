<?php
    $apple = "5"; //りんごの数
    $singleString = 'i\'m Security Enginner';
    const GREETING_EVENING = "こんばんは";
    $name = "太郎くん";

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskDataType</title>
</head>
<body>
    <p><?php echo('回答を<p>タグで囲み、回答を出力してください。'); ?></p>
    <p><?php echo('回答例: 1 + 1 = ' . (1 + 1) . 'です。'); ?></p>
    <br>
    <p><?php echo('課題１<p>１．りんごが' . " $apple " . '個あります。') ?></p>
    <p><?php echo("課題２<p>１．string型を使用するときに、ダブルクオート(\")を表示する場合は、バックスラッシュ(\)が必要です。") ?></p>
    <p><?php echo('課題３<p>１．' . $singleString ) ?></p>
    <p><?php echo("課題４<p>１．" .GREETING_EVENING.   "、". " $name " ) ?></p>

</body>
<body>
</body>
</html>