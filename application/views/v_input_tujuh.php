<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat CRUD dengan CI</title>
</head>
<body>
    
    <center>
        <h1>CRUD Tabel Property Tipe tujuh</h1>
        <h3>Tambah data baru</h3>
    </center>

    <form action="<?php echo base_url(). 'jasa/tambah_aksi_tujuh'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Lokasi</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Dp</td>
                <td><input type="text" name="dp"></td>
            </tr>
            <tr>
                <td>Cicilan</td>
                <td><input type="text" name="cicilan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

</body>
</html>