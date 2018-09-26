<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belanja</title>
</head>
<body>
    <form action="proses.php" method="post">
        <table align="center">
            <tr valign="top">
                <td>Daftar Belanja</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="barang[]" value="Buku Gambar">Buku Gambar<br>
                    <input type="checkbox" name="barang[]" value="Buku Tulis">Buku Tulis<br>
                    <input type="checkbox" name="barang[]" value="Buku Petak ">Buku Petak <br>
                    <input type="checkbox" name="barang[]" value="Buku Note">Buku Note
                </td>
            </tr>
            <tr>
                <td>Jenis Pengiriman</td>
                <td>:</td>
                <td>
                  
                    <input type="radio" name="pengiriman" value="JNE">JNE
                    <input type="radio" name="pengiriman" value="Tiki">Tiki
                    <input type="radio" name="pengiriman" value="J&T">J&T
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <input type="hidden" name="tanggal" value="<?php echo date("Y/m/d"); ?>">
                <td colspan="3"><input type="submit" value="beli"></td>
            </tr>
        </table>
    </form>
</body>
</html>