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
    <p><?php echo('110 × 15 = ' . (110*15) . '<p>答え1650円です。'); ?></p>
    <br>
    <p><?php echo('問２．オレンジの総額(税別)は何円ですか？');?></p>
    <p><?php echo('80 × 12 = ' . (80*12) . '<p>答え960円です。');?></p>
    <br>
    <p><?php echo('問３．総額(税別)は何円ですか？');?></p>
    <p><?php echo('1650 + 960 = ' . (1650+960) . '<p>答え2610円です。');?></p>
    <br>
    <p><?php echo('問４．総額(税込)は何円ですか？');?></p>
    <p><?php echo('2610 × 1.1 = ' . (2610*1.1) . '<p>答え2871円です。');?></p>
    <br>
    <p><?php echo('問５．フルーツ１個あたりの金額(税別)は何円ですか？(小数点以下は四捨五入)');?></p>
    <p><?php echo('2610 ÷ ( 15 + 12 ) = ' . round(2610/(15+12)) . '<p>答え97円です。');?></p>
</body>
</html>