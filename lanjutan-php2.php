<?php
    $nama = "Aril";

    // echo $nama;
    // echo "<br/>";
    // echo $nama;
    // echo "<br/>";
    // echo $nama;
    // echo "<br/>";
    // echo $nama;
    // echo "<br/>";
    // echo $nama;

    // Perulangan
    /*
    $no = 12;
    for ($i=0; $i<$no; $i++) {
        $n = $i + 1;
        echo $n." ".$nama."<br/>";
    }
    */

    /*
    $no = 12;
    $i = 0;

    while ($i < $no) {
        $n = $i + 1;
        echo $n. " ".$nama."<br/>";
        $i++;
    }
    */

    /*
    $no = 12;
    $i = 0;

    do {
        $n = $i + 1;
        echo $n." ". $nama."<br/>";
        $i++;
    } while ($i < $no) 
    */

    // Array
    /*
    $data = array ('Xenia', 'Ayla', 'Pajero', 'Innova', 'Brio', 'Jazz');

    $i = 0;
    while ($i < count($data)) {
        echo $data[$i]. "<br/>";
        $i++;
    }
    */


    // echo $data[4];


    /*
    foreach ($data as $value) {
        echo $value."<br/>";
    }
    */

    // Percabangan
    /*
    if ($nama == "Aril") {
        echo $nama. " adalah orang Banyuwangi";
    }else if ($nama == "Aca") {
        echo $nama. " berasal dari Jawa Timur";
    }else {
        echo $nama. " darimana ya?";
    }
    */

    /*
    switch ($nama) {
        case 'Aril':
            $pesan = $nama.  " adalah orang Banyuwangi";
            break;
        case 'Aca':
            $pesan = $nama.  " berasal dari Jawa Timur";
            break;
        
        default:
            $pesan = $nama. " darimana ya?";
    }

    echo $pesan;
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP 2</title>
</head>
<body>
    <h1>Input Data</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(!empty ($_POST['submit'])) {

            switch ($_POST['nama']) {
                case 'Qia':
                    $pesan = $_POST['nama'].  " adalah orang Banyuwangi";
                    break;
                case 'Aca':
                    $pesan = $_POST['nama'].  " berasal dari Jawa Timur";
                    break;
                default:
                    $pesan = $_POST['nama']. " darimana ya?";
            }
            for ($i=0; $i < $_POST['no']; $i++) {
                echo $pesan. "<br/>";
            }
        } else {
            echo "Anda belum input data";
        }
    ?>
</body>
</html>