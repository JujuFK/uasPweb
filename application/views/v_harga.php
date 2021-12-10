<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Wow Property</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url()?>image/home.png">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo base_url().'jasa'?>'>Wow Property</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo base_url().'jasa'?>">Home</a></li>
                    <li><a href="#map">Lokasi</a></li>
                    <li><a href="#type">Tabel</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <div class="row" id="type">
            <div class="col-sm-9">
                <img src="<?php echo base_url()?>image/08.jpg" class="type55">
                <h1 id="harga">TABEL HARGA TYPE 55</h1>
                <table border="1">
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
                    </tr>
                    <?php } ?>
                </table>

                <img src="<?php echo base_url()?>image/type70.jpg" class="type55">
                <h1>TABEL HARGA TYPE 70</h1>
                <table border="1">
                    <tr>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>DP</th>
                        <th>Cicilan 36 Bulan</th>
                    </tr>
                    <?php foreach($tujuh as $u){ ?>
                    <tr>
                    <td><?php echo $u->alamat ?></td>
                    <td>Rp.<?php echo $u->harga ?></td>
                    <td>Rp.<?php echo $u->dp ?></td>
                    <td>Rp.<?php echo $u->cicilan ?></td>
                    </tr>
                    <?php } ?>
                </table>

                <img src="<?php echo base_url()?>image/type80.jpg" class="type55">
                <h1>TABEL HARGA TYPE 80</h1>
                <table border="1">
                    <tr>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>DP</th>
                        <th>Cicilan 36 Bulan</th>
                    </tr>
                    <?php foreach($tujuh as $u){ ?>
                    <tr>
                    <td><?php echo $u->alamat ?></td>
                    <td>Rp.<?php echo $u->harga ?></td>
                    <td>Rp.<?php echo $u->dp ?></td>
                    <td>Rp.<?php echo $u->cicilan ?></td>
                    </tr>
                    <?php } ?>
                </table>

                <img src="<?php echo base_url()?>image/type90.jpg" class="type55">
                <h1>TABEL HARGA TYPE 90</h1>
                <table border="1">
                    <tr>
                        <th>Lokasi</th>
                        <th>Harga</th>
                        <th>DP</th>
                        <th>Cicilan 36 Bulan</th>
                    </tr>
                    <?php foreach($sembilan as $u){ ?>
                    <tr>
                    <td><?php echo $u->alamat ?></td>
                    <td>Rp.<?php echo $u->harga ?></td>
                    <td>Rp.<?php echo $u->dp ?></td>
                    <td>Rp.<?php echo $u->cicilan ?></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
            <div class="col-sm-3">
                <img src="<?php echo base_url()?>image/samping80.jpg" class="side-content">
                <p></p>
                <img src="<?php echo base_url()?>image/storyy.jpg" class="side-content">
            </div>
            
        </div>
    </div>
    <div class="wrapper" id="map">
        <img src="<?php echo base_url()?>image/26.jpg" class="lokasi">
        <img src="<?php echo base_url()?>image/27.jpg" class="lokasi">
    </div>


    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>Wow Property .</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>
