<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Project perbandingan</title>
</head>
<body>
    <!-- tampilan layar -->
<div class="wrapper">
    <form action="" method="POST">
        <h1 class="cek"> perbandingan </h1>
        <div class="input-box">
            <label for="angka_pertama"> Angka Pertama : </label>
            <input type="numbber" name="angka_pertama" id="angka_pertama">
        </div>
        <div class="input-box">
            <label for="angka_kedua"> Angka Kedua : </label>
            <input type="number" name="angka_kedua" id="angka_kedua">
        </div>
        <div class="button">
            <button type="submit"class="btn">Cek Hasil</button>
         </div> 
    
<?php
if (!isset($_POST['angka_pertama']) || !isset($_POST['angka_kedua'])) {
    echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!!</p>";
} else {
    // input data
    $angka1 = $_POST['angka_pertama'];
    $angka2 = $_POST['angka_kedua'];
    // logic perbandingan
    if ($angka1 == $angka2){
        $tampilan = "$angka1 sama dengan $angka2";
        $lambang = "=";
    } elseif ($angka1 > $angka2) {
        $tampilan = "$angka1 lebih besar dari $angka2";
        $lambang = ">";
    } else {
        $tampilan = "$angka1 lebih kecil dari $angka2";
        $lambang = "<";
    }

    echo "<p style='text-align: center;'>" . $tampilan . "</p>";
    echo "<p style='text-align: center;'>" . $lambang . "</P>";
}   
?>  
 </form>
</div>

</body>
</html>
