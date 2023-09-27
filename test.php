<?php
    $arrayAwal = [10, 20, 30, 40, 50];
    $arrayHasil = [];
    
    foreach ($arrayAwal as $nilai) {
        $hasilBagi = $nilai % 5;
        $arrayHasil[] = $hasilBagi;
    }
    
    // Menampilkan array hasil
    print_r($arrayHasil);
    echo $arrayHasil . "<br>";
?>

<?php
$myArray = ["Apel", "Jeruk", "Mangga", "Pisang"];

foreach ($myArray as $nilai) {
    echo $nilai . "<br>";
}

?>