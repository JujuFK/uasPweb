<!DOCTYPE html>
<html lang="en">
<head>
    <title>Membuat CRUD dengan CI</title>
</head>
<body>
    
    <center>
        <h1>CRUD Tabel Property Tipe 70</h1>
        <h3>Edit Data</h3>
    </center>

    <?php foreach($sembilan as $u){ ?>
    <form action="<?php echo base_url(). 'jasa/update_sembilan'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Lokasi</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $u->id ?>">
                    <input type="text" name="alamat" value="<?php echo $u->alamat ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $u->harga ?>"></td>
            </tr>
            <tr>
                <td>Dp</td>
                <td><input type="text" name="dp" value="<?php echo $u->dp ?>"></td>
            </tr>
            <tr>
                <td>Cicilan</td>
                <td><input type="text" name="cicilan" value="<?php echo $u->cicilan ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php } ?>

</body>
</html>