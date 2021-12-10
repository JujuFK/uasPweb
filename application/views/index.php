<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wow Property</title>
    <link rel="shortcut icon" href="<?php echo base_url()?>image/home.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo base_url().'jasa'?>'>Wow Property</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#aboutus">About Us</a></li>
                    <li><a href="#rumah">Rumah</a></li>
                    <li><a href="#consul">Consul</a></li>
                    <li><a href="#partners">Partners</a></li>
                    <li><a href="" class="tbl-biru login">Sign in</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="box hidden">
        <button class="close">Close</button>
        <label for="Id">Id:</label> <br>
        <input type="text" name="Id" class="id"> <br>
        <label for="Password">Password</label> <br>
        <input type="password" name="Password" class="password"> <br>
        <button class="log">Login</button>
        <p class="para hidden">WRONG ID or PASSWORD</p>
    </div>

    <div class="wrapper">
        <section id="aboutus">
            <img src="<?php echo base_url()?>image/rumah.jpg" class="rumah"/>
            <div class="kolom">
                <p class="deskripsi">Mencari rumah dengan gampang dan mudah </p>
                <h2>Cepat dan terpercaya</h2>
                <p class="isi-content">
                   <p class="isi-content">Kenalin Aplikasi baru kami WowProperty WowProperty berangkat dari mimpi dan pemikir - pemikir
                 
                    mahasiswa yang ingin membantu memudahakan kehidupan orang banyak melalui Teknologi Berawal dari 
                    Property. Sekarang Aplikasi WowProperty ini sedang kami RINTIS dan  kami Bangun,Ada pun salah satu 
                    tujuan kami adalah melayani para client kami yang mencari sebuah Property Terbaik Mereka,dan sementara </p>
                    <p class="isi-content">
                    Aplikasi kami Rintis kami sedang  memikirkan konsep - konsep dan fitur - fitur yang terbaik sehinnga 
                    dapat membuat pengguna mudah mengerti,  WowJasa mengigatkan kami bahwa kami harus bisa memberikan 
                    berbagai  solusi untuk membantu client mendapatkan property yang mereka inginkan,dan Rancangan Aplikasi ini
                    kami berharap bisa mengingatkan kita bahwa di balik setiap tantangan,pasti ada solusi untuk melewawtinya,
                    karena dengan WowProperty. </p>
                </p>
            </div>
        </section>

        <section id="rumah">
            <div class="kolom">
                <p class="deskripsi">Jika anda berminat atau sedang mencari Rumah</p>
                <h2>Kami siap untuk melayani anda sepenuh hati</h2>
                <p class="isi-content">Menikmati promo dan hadiah terbaik nan keren yang di persembahkan oleh pendiri rumah elite terbaik sekota Batam dan developer terbaik di Indonesia Ciputra.</p>
                <p><a href="<?php echo base_url().'jasa/harga'?>" class="tbl-biru">Info property lebih lanjut</a></p>
            </div>
            <img src="<?php echo base_url()?>image/rumah4.jpg" class="rumah"/>
        </section>

        <section id="aboutus">
            <img src="<?php echo base_url()?>image/service.jpg" class="rumah"/>
            <div class="kolom">
                <p class="deskripsi">Ingin mencari jasa dengan harga murah dan terjangkau?</p>
                <h2>Hanya ada disini</h2>
                <p class="isi-content">
                Wow Jasa adalah sebuah startup yang bergerak di bidang property, yang memberikan berbagai macam layanan jasa dengan harga yang terjangkau. Renovasi rumah, membetulkan listrik, atau cleaning service dapat di pesan melalui Wow Jasa
                </p>
                <p><a href="<?php echo base_url().'jasa/kegiatan'?>" class="tbl-biru">Wow Jasa</a></p>
            </div>
        </section>

        <section id="consul">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Consultant</p>
                    <h2>Consultasi</h2>
                    <p class="isi-content">Konsultasi dengan agen property profesional!</p>
                </div>

                <div class="tutor-list">
                    <div class="kartu-tutor">
                        <img src="<?php echo base_url()?>image/consul.jpeg"/>
                        <p>Yitro</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="<?php echo base_url()?>image/consul.jpeg"/>
                        <p>Yitro</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="<?php echo base_url()?>image/consul.jpeg"/>
                        <p>Yitro</p>
                    </div>
                    <div class="kartu-tutor">
                        <img src="<?php echo base_url()?>image/consul.jpeg"/>
                        <p>Yitro</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="partners">
            <div class="tengah">
                <div class="kolom">
                    <p class="deskripsi">Our Top Partners</p>
                    <h2>Partners</h2>
                </div>

                <div class="partner-list">
                    <div class="kartu-partner">
                        <img src="<?php echo base_url()?>image/logometa.png"/>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>Property</h3>
                    <p class="isi-content">Ikuti kami terus untuk info lebih lanjut</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p class="isi-content">Jalan Raja H. Fisabilillah komp, Teluk Tering, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <p><i class="fa fa-instagram" style="font-size:20px"></i> wow_property</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>Wow Property .</b> All Rights Reserved.
        </div>
    </div>
    
    <script src="<?php echo base_url()?>assets/js/script.js"></script>
</body>
</html>
