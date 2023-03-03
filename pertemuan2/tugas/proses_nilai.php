<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body bgcolor ="green">
    <div class="container" style="text-align: center;">

    <?php

$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$grade = ($uts + $uas + $praktikum) / 3;

echo "Nama: $nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Praktium: $praktikum <br>";

echo "<br>Rata-Rata : " . round(($uts + $uas + $praktikum) /3);
echo("<br>");
if ($grade>=85)
echo("Grade : <b>A</b>");
elseif ($grade>=70)
echo("Grade : <b>B</b>");
elseif ($grade>=56)
echo("Grade : <b>C</b>");
elseif ($grade>=36)
echo("Grade : <b>D</b>");
elseif ($grade>=0)
echo("Grade : <b>E</b>");


?>

    
    </div>
    
</body>
</html>