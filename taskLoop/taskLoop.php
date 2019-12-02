<?php
    /// 課題1
    $fruitsTranslate = [
        'apple' => [
            'japanese' => 'りんご',
            'price' => 80 ,
         ],
        'orange' => [
            'japanese' => 'オレンジ',
            'price' => 120 ,
         ],
         'grape' => [
            'japanese' => 'ぶどう',
            'price' => 220 ,
         ],
    ];

    /// 課題2
    $scoreList = [
        'A' => [
            '国語' => 34 ,
            '数学' => 67 ,
            '社会' => 45 ,
            '理科' => 34 ,
            '英語' => 89 ,
        ],
        'B' => [
            '国語' => 76 ,
            '数学' => 72 ,
            '社会' => 65 ,
            '理科' => 77 ,
            '英語' => 80 ,
        ],
        'C' => [
            '国語' => 98 ,
            '数学' => 87 ,
            '社会' => 88 ,
            '理科' => 92 ,
            '英語' => 96 ,
        ],
        'D' => [
            '国語' => 65 ,
            '数学' => 34 ,
            '社会' => 71 ,
            '理科' => 56 ,
            '英語' => 76 ,
        ],
        'E' => [
            '国語' => 67 ,
            '数学' => 55 ,
            '社会' => 87 ,
            '理科' => 56 ,
            '英語' => 69 ,
        ],
        'F' => [
            '国語' => 81 ,
            '数学' => 79 ,
            '社会' => 74 ,
            '理科' => 82 ,
            '英語' => 85 ,
        ],
    ];
    foreach($scoreList as $name => $score)
    $table = array(
        array($name),
        array($score)
    );

   // 教科ごとの平均
   $averageSubject = [
       '国語' => 0,
       '数学' => 0,
       '社会' => 0,
       '理科' => 0,
       '英語' => 0,
   ];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>taskLoop</title>
</head>
<body>
<h3>課題1</h3>
    <p>
        <?php echo('配列で定義したデータ結果を図1通り表示してください。<p>' );
        foreach($fruitsTranslate as $key => $value ) {
            echo('英語では' .$key. 'と表示され、日本語では' . $value['japanese'] . '、価格は' . $value['price'] .'円です。<br>');
        }
        ?>
    </p>
<h3>課題2</h3>
    <p>
        <?php echo('図2のデータを参考にし、回答結果を図3の出力イメージ通り、表示してください。<p>' );
        ?>
    </p>
    <table border=1>
        <tr>
            <th>名前</th>
            <th>国語</th>
            <th>数学</th>
            <th>社会</th>
            <th>理科</th>
            <th>英語</th>
            <th>平均</th>
        </tr>
        
        <?php 
            foreach($scoreList as $name => $allScore ){
                $total = 0;
         ?>
        <tr>
            <td><?= $name?></td>
            <?php foreach($allScore as $subject => $score){ ?>
                <td><?= $score?></td>
                <?php
                $total += $score;
                $averageSubject[$subject] += $score;
                ?>
            <?php } ?>
            <td><?= $total/count($allScore)?></td>
        </tr>
        <?php } ?>
        
        <tr>
            <td>平均</td>
            <?php 
                $totalAverage = 0;
            ?>
            <?php foreach($averageSubject as $subject => $subjectScore){ ?>
            
                <td><?= round($subjectScore/count($scoreList),1); ?></td>
                <?php
                $totalAverage += $subjectScore/count($scoreList);
                ?>
            <?php } ?> 
            <td><?= round($totalAverage/count($averageSubject),1);?></td>
        </tr>

        
    
    </table>
            
</body>
<body>
</body>
</html>