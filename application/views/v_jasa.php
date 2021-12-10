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
                    <li><a href="#map">Renovasi</a></li>
                    <li><a href="#type">Electricity</a></li>
                    <li><a href="#consul">Cleaning Service</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">

        <section id="map">
            <div class="kolom">
                <p class="deskripsi">Jika anda berminat untuk renovasi rumah</p>
                <h2>Kami siap memberikan pelayanan untuk anda</h2>
                <p class="isi-content">Beragam pekerja-pekerja yang kami siapkan untuk membantu merenovasi rumah anda dengan biaya yang relatif murah</p>
            </div>
            <img src="https://image.freepik.com/free-photo/people-renovating-house-concept_53876-20664.jpg" class="rumah"/>
        </section>

        <section id="type">
            <img src="https://image.freepik.com/free-photo/electrician-builder-work-examines-cable-connection-electrical-line-fuselage-industrial-switchboard-professional-overalls-with-electrician-s-tool_169016-8632.jpg" class="rumah"/>
            <div class="kolom">
                <p class="deskripsi">Ada masalah dalam perlistrikan?</p>
                <h2>Silahkan hubungi WowJasa</h2>
                <p class="isi-content">
                   Kami memiliki berbagai ahli dibidang perlistrikan yang siap untuk membantu anda!! 
                </p>
            </div>
        </section>

        <section id="consul">
            <div class="kolom">
                <p class="deskripsi">Rumah kotor dan tidak terurus?</p>
                <h2>Kami juga menyediakan layanan cleaning service</h2>
                <p class="isi-content">Berbagai jenis layanan pembersihan yang akan kami berikan. Dan pastinya akan sesuai dengan keinginan anda</p>
            </div>
            <img src="https://img.freepik.com/free-photo/young-girl-is-holding-cleaning-product-gloves-rags-basin-white-wall_1150-21780.jpg?size=338&ext=jpg" class="rumah"/>
        </section>

    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>Wow Property .</b> All Rights Reserved.
        </div>
    </div>
    
</body>
</html>
