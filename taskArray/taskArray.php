<?php
    //  課題１
    $averageSalaryArray = [
        2018 => 4410000,
        2017 => 4320000,
        2016 => 4220000,
        2015 => 4200000,
        2014 => 4150000
    ];
    $total = $averageSalaryArray[2018] + $averageSalaryArray[2017] + $averageSalaryArray[2016]+ $averageSalaryArray[2015] + $averageSalaryArray[2014];
    $average = $total/count($averageSalaryArray);

    // 課題２
    $averageNember = [
        "A" => 80,
        "B" => 55,
        "C" => 61,
        "D" => 76,
        "E" => 34,
        "F" => 93,
    ];
    $scoreTotal = $averageNember["A"] + $averageNember["B"] +$averageNember["C"] + $averageNember["D"] +$averageNember["E"] + $averageNember["F"] ;
    $scoreAverage = $scoreTotal/count($averageNember);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskArray</title>
</head>
<body>
    <h3>課題1-1.設定した配列をvar_dumpを使用して表示してください。</h3>
    <p>
        <?php
        echo("<pre>");
        var_dump($averageSalaryArray);
        echo("</pre>")
        
         ?>
    </p>

    <h3>課題1-2.各年の平均年収をもとに過去5年間の平均年収を求めよ。</h3>
    <p>
        <?php echo('過去5年の平均年収は' .$average . '円です。' ) ?>
    </p>

    <h3>課題2-1.設定した配列をver_dumpを使用して表示してください。</h3>
    <p>
    <?php
        echo("<pre>");
        var_dump($averageNember);
        echo("</pre>")
        
         ?>
    </p>

    <h3>課題2-2.A~Fのテスト結果をもとに平均点数を求めよ。</h3>
    <p>
    <?php echo('平均点数は' .$scoreAverage . '点です。' ) ?>
    </p>
</body>
</html>