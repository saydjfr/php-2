<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Berlatih Looping</h1>
    <?php 
    echo "<h3> Soal Nomor 1 Looping I Love PHP</h3>";
    echo "<h4>Loopingan pertama</h4>";
    for ($i = 1; $i <=10; $i++){
        $out = $i*2;
        echo "$out-I Love PHP <br/>";
    }

    echo "<br/>";
    echo "<h4>Loopingan Kedua</h4>";
    for ($i= 10; $i >= 1; $i--){
        $out = $i *2;
        echo "$out-I Love PHP <br/>";
    }
    // array modules
    echo "<h3> Soal Nomor 2 Looping Hasil Bagi</h3>";

    $numbers=[18,45,29,61,47,34];
    echo "Array Number : <br>";
    print_r($numbers);
    echo "<br/>";
    $rest =[];
    foreach($numbers as $value){
        $sisabagi= $value % 5;
        $rest []= $sisabagi;
        // print_r($rest);
    }
    echo "<br/>";
    echo "Array sisa baginya adalah : <br/>";
    print_r($rest);
    echo "<br/>";  
    
    // array assosiative
    echo "<h3> Soal Nomor 3 Array Assosiative Looping</h3>";
    $items =[
['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'],
['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
    ];
    
    foreach($items as $item){
        $hasil=[
            "id"=> $item[0],
            "name"=>$item[1],
            "price"=>$item[2],
            "description"=>$item[3],
            "source"=>$item[4]."<br/>"
        ];
        print_r($hasil) ."<br/>";
    }



    // membuat asterix
    echo "<br/>";
    echo "<h3> Soal Nomor 4 Membuat Asterix</h3>";
    for ($i=1;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo"<br/>";
    }
    ?>
</body>
</html>