<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tittle>
    <h1>Deret Fibonacci</h1>
    </tittle>
    <link rel="stylesheet"href="./PHP/stylephp.css">
</head>

<body>
<form method="GET" action="">
    nilai a : <input type="text" name="a" placeholder="Masukkan Angka Pertama"><b
r><br>
    nilai b : <input type="text" name="b" placeholder="Masukkan Angka Kedua"><br>
<br>
    Deret yang diinginkan : <input type="text" name="deret" placeholder="Masukkan
 Jumlah Deret"><br>
        <input type="submit" name="Hitung" value="Hitung"> <br>
</form>
<?php
        if(isset($_POST['Hitung'])){
        $x1 = $_POST['a'];
        $x2 = $_POST['b'];
        $deret = $_POST['deret'];

        echo '<br>';
        echo "Outputnya adalah : $x1 $x2"; 

        for($i = 1; $i <= $deret; $i++){
            $hasil = $x2 + $x1;
            echo "$hasil";
            $x1 = $x2;                    
            $x2 = $hasil;                  

        }

    }
?>
    </body>
</html>