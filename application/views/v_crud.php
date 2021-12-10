<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?php echo base_url()?>image/home.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo base_url().'jasa'?>'>Wow Property</a></div>
            <div class="menu">
                <ul>
                    <!-- <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#rumah">Rumah</a></li>
                    <li><a href="#consul">Consul</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="" class="tbl-biru login">Sign Up</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <center><h1>CRUD Tabel Property Tipe 55</h1></center>
    <center><?php echo anchor('jasa/tambah','Tambah Data'); ?></center>

    <table style="margin:20px auto;" border="1">
        <tr>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>DP</th>
            <th>Cicilan 12 Bulan</th>
            </tr>
            <?php foreach($lima as $u){ ?>
            <tr>
                <td><?php echo $u->alamat ?></td>
                <td>Rp.<?php echo $u->harga ?></td>
                <td>Rp.<?php echo $u->dp ?></td>
                <td>Rp.<?php echo $u->cicilan ?></td>
                <td>
                    <?php echo anchor('jasa/edit/'.$u->id,'Edit'); ?>
                    <?php echo anchor('jasa/hapus/'.$u->id,'Hapus'); ?>
                </td>
            </tr>
            <?php } ?>
    </table>

    <center><h1>CRUD Tabel Property Tipe 70</h1></center>
    <center><?php echo anchor('jasa/tambah_tujuh','Tambah Data'); ?></center>

    <table style="margin:20px auto;" border="1">
        <tr>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>DP</th>
            <th>Cicilan 12 Bulan</th>
            </tr>
            <?php foreach($tujuh as $u){ ?>
            <tr>
                <td><?php echo $u->alamat ?></td>
                <td>Rp.<?php echo $u->harga ?></td>
                <td>Rp.<?php echo $u->dp ?></td>
                <td>Rp.<?php echo $u->cicilan ?></td>
                <td>
                    <?php echo anchor('jasa/edit_tujuh/'.$u->id,'Edit'); ?>
                    <?php echo anchor('jasa/hapus_tujuh/'.$u->id,'Hapus'); ?>
                </td>
            </tr>
            <?php } ?>
    </table>

    <center><h1>CRUD Tabel Property Tipe 80</h1></center>
    <center><?php echo anchor('jasa/tambah_delapan','Tambah Data'); ?></center>

    <table style="margin:20px auto;" border="1">
        <tr>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>DP</th>
            <th>Cicilan 12 Bulan</th>
            </tr>
            <?php foreach($delapan as $u){ ?>
            <tr>
                <td><?php echo $u->alamat ?></td>
                <td>Rp.<?php echo $u->harga ?></td>
                <td>Rp.<?php echo $u->dp ?></td>
                <td>Rp.<?php echo $u->cicilan ?></td>
                <td>
                    <?php echo anchor('jasa/edit_delapan/'.$u->id,'Edit'); ?>
                    <?php echo anchor('jasa/hapus_delapan/'.$u->id,'Hapus'); ?>
                </td>
            </tr>
            <?php } ?>
    </table>

    <center><h1>CRUD Tabel Property Tipe 90</h1></center>
    <center><?php echo anchor('jasa/tambah_sembilan','Tambah Data'); ?></center>

    <table style="margin:20px auto;" border="1">
        <tr>
            <th>Lokasi</th>
            <th>Harga</th>
            <th>DP</th>
            <th>Cicilan 12 Bulan</th>
            </tr>
            <?php foreach($sembilan as $u){ ?>
            <tr>
                <td><?php echo $u->alamat ?></td>
                <td>Rp.<?php echo $u->harga ?></td>
                <td>Rp.<?php echo $u->dp ?></td>
                <td>Rp.<?php echo $u->cicilan ?></td>
                <td>
                    <?php echo anchor('jasa/edit_sembilan/'.$u->id,'Edit'); ?>
                    <?php echo anchor('jasa/hapus_sembilan/'.$u->id,'Hapus'); ?>
                </td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>