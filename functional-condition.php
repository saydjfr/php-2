<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berlatih Function</h1>
    <?php
    function greetings($nama){
        echo "Halo $nama, Selamat Datang di Garuda Cyber Institute <br/>";
    }
    greetings('Abduh');
    greetings('Bagas');
    greetings('Wahyu');
    greetings("Sayyid Ja'far Shodiq Al Husaini");
    echo "<br/>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    function reverseString($balik){
        $lgteks=strlen($balik);
        $hsteks="";
        for($i=$lgteks -1;$i>=0;$i--){
            $hsteks.=$balik[$i];
            
        }
        echo $hsteks."<br/>";
        return $hsteks;
    }
    
    reverseString("Sayyid Ja'far Shodiq Al Husaini");
    reverseString('Garuda Cyber Institue');
    reverseString('We Are GC-Ins Developer');
    echo "<br/>";

    echo "<h3>Soal Nomor 3, Palindrome</h3>";

    function palindrome($pldrome){
        $lgteks=strlen($pldrome);
        $hsteks="";
        for($i=$lgteks -1;$i>=0;$i--){
            $hsteks.=$pldrome[$i];
        }
        if($hsteks==$pldrome){
            echo "true <br/>";
        } else{
            echo "false <br/>";
        }
        return $hsteks;
    }
    palindrome('civic');
    palindrome('nababan');
    palindrome('jambaban');
    palindrome('racecar');
echo "<br/>";
echo "<h3>Soal Nomor 4 Tentukan Nilai</h3>";
function Tentukan_nilai($nilai){
    if($nilai >= 85 && $nilai<=100 ){
        echo "sangat bagus ";
    }else if($nilai >=70 && $nilai <=85){
            echo "baik ";
    }else if ($nilai >=60 && $nilai <= 70){
        echo "cukup ";
    }else{
        echo "Kurang ";
    }
    return $nilai;
}
echo Tentukan_nilai(98)."<br/>";
echo Tentukan_nilai(76)."<br/>";
echo Tentukan_nilai(67)."<br/>";
echo Tentukan_nilai(43)."<br/>";

    ?>
</body>
</html>