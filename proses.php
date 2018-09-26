<?php
session_start();

$user = $_SESSION["user"];
$barang = $_POST["barang"];
$pengiriman = $_POST["pengiriman"];
$alamat = $_POST["alamat"];
$tglbeli = $_POST["tanggal"];
$harga = 0;
$hargapengiriman = 0;

for ($i=0;$i<count($barang);$i++) { 
    if ($barang[$i] == "Buku Gambar")
        $harga += 25000;
    else if ($barang[$i] == "Buku Tulis") 
        $harga += 4000;
    else if ($barang[$i] == "Buku Petak")
        $harga += 22000;
    else if ($barang[$i] == "Buku Note")
        $harga += 12000;
}

if($pengiriman == "JNE")
    $hargapengiriman = 25000;
if($pengiriman == "Tiki")
    $hargapengiriman = 10000;
if($pengiriman == "J&T")
    $hargapengiriman = 2000;

function total($a, $b) {
    return $a + $b;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awal</title>
</head>
<body>
    <table>

        <tr>
            <td>Tanggal Submit</td>
            <td>:</td>
            <td><?php echo $tglbeli; ?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $user["nama"]; ?></td>
        </tr>

        <tr>
            <td>No. Telp</td>
            <td>:</td>
            <td><?php echo $user["notelp"]; ?></td>
        </tr>

        <tr valign="top">
            <td>Barang yang dibeli</td>
            <td>:</td>
            <td>


                <?php
                foreach ($barang as $barang_b) {
                    echo $barang_b . "<br>";
                }
                ?>
            </td>
        </tr>


        <tr>
            <td>Pengiriman</td>
            <td>:</td>
            <td><?php echo $pengiriman . " " . $hargapengiriman; ?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>:</td>
            <td><?php echo total($harga, $hargapengiriman); ?></td>
        </tr>
    </table>
</body>
</html>