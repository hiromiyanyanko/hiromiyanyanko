<?php
    $applePrice = 110; // りんごの値段
    $apple = 15; // りんごの数
    $appleTotal = $applePrice * $apple; // りんごの総額
    $orangePrice =80; // オレンジの値段
    $orange = 12; // オレンジの数
    $orangeTotal = $orangePrice * $orange; // オレンジの総額
    $allTotal = $appleTotal + $orangeTotal; // 総額(税別)
    $tax = 1.1; // 税率
    $allTotal_tax = $allTotal * $tax; // 総額(税込)
    $totalFruits = $apple + $orange; // フルーツの合計数
    $oneFruitPraice = $allTotal / $totalFruits // フルーツ１個あたりの金額
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
    <br>
    <p><?php echo('問１.りんごの総額(税別)は何円ですか？'); ?></p> 
    <p><?php echo( ($applePrice)  . ' × ' . ($apple) . ' = ' . ($appleTotal) . '<p>答え' . ($appleTotal) . '円です。'); ?></p>
    <br>
    <p><?php echo('問２．オレンジの総額(税別)は何円ですか？');?></p>
    <p><?php echo( ($orangePrice) . ' × ' . ($orange) . ' = ' . ($orangeTotal) . '<p>答え' . ($orangeTotal) . '円です。');?></p>
    <br>
    <p><?php echo('問３．総額(税別)は何円ですか？');?></p>
    <p><?php echo( ($appleTotal) . ' + ' . ($orangeTotal) . ' = ' . ($allTotal) . '<p>答え' . ($allTotal) . '円です。');?></p>
    <br>
    <p><?php echo('問４．総額(税込)は何円ですか？');?></p>
    <p><?php echo( ($allTotal) . ' × ' . ($tax) . ' = ' . ($allTotal_tax) . '<p>答え' . ($allTotal_tax) . '円です。');?></p>
    <br>
    <p><?php echo('問５．フルーツ１個あたりの金額(税別)は何円ですか？(小数点以下は四捨五入)');?></p>
    <p><?php echo( ($allTotal) . ' ÷ ' . ( $totalFruits) . ' = ' . ($oneFruitPraice) . '<p>答え' . round($oneFruitPraice) . '円です。');?></p>
</body>
</html>