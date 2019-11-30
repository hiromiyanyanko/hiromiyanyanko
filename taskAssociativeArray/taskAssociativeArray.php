<?php
    // 課題１
    $score ["A"] = [
              "国語" => 85,
              "数学" => 64,
              "社会" => 45,
              "理科" => 77,
              "英語" => 80,
                ];
    $score ["B"] = [
              "国語" => 56,
              "数学" => 89,
              "社会" => 73,
              "理科" => 85,
              "英語" => 78,
                ];
    $score ["C"] = [
              "国語" => 98,
              "数学" => 87,
              "社会" => 88,
              "理科" => 92,
              "英語" => 96,
          ];
    // 課題1-3 A君の平均点
    $totalA = $score ["A"] ["国語"] + $score ["A"] ["数学"] + 
              $score ["A"] ["社会"] + $score ["A"] ["理科"] + $score ["A"] ["英語"];
    $averageA = $totalA / count($score["A"]);
    
    // 課題1-4 C君の平均点
    $totalC = $score ["C"] ["国語"] + $score ["C"] ["数学"] + 
              $score ["C"] ["社会"] + $score ["C"] ["理科"] + $score ["C"] ["英語"];
    $averageC = $totalC / count($score["C"]);
    
    // 課題1-5 3人の数学の平均点
    $averageMath = ($score ["A"] ["数学"] + $score ["B"] ["数学"] + $score ["C"] ["数学"]) / count($score);
    

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskAssociativeArray</title>
</head>
<body>
    <h3>課題1-1<br></h3>
    <p>
        <?php echo('A君の理科の点数を表示してください。<br>' .
                   $score["A"]["理科"]. '点です。');
        ?>
    </p>
    <h3>課題1-2<br></h3>
    <p>
        <?php echo('B君の英語の点数を表示してください。<br>' .
                  $score["B"]["英語"] . '点です。');
        ?>
    </p>
    <h3>課題1-3<br></h3>
    <p>
        <?php echo('A君の平均点を求めよ。<br>' .
                  $averageA. '点です。');
        ?>
    </p>
    <h3>課題1-4<br></h3>
    <p>
        <?php echo('C君の平均点を求めよ。<br>' .
                  $averageC. '点です。');
        ?>
    </p>
    <h3>課題1-5<br></h3>
    <p>
        <?php echo('3人の数学の平均点を求めよ。<br>' .
                  $averageMath. '点です。');
        ?>
    </p>
</body>
<body>
</body>
</html>