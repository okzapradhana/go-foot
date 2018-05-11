<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Go-Foot</title>
     
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/navbar.css">   
</head>

<body>
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="http://go-foot.creatonomics.id/assets/pic/background-edited.png" class="text-over-image">
                <!-- random image -->
                <div class="caption center-align">
                    <h3>LAPER? Go-Food aja!</h3>
                    <h3>BAPER? Go-Foot aja!</h3>
                    <h6 style="margin-top: 90px;" class="light grey-text text-lighten-3">
                        Scroll kebawah untuk info lebih lanjut
                    </h6>
                </div>
            </li>
        </ul>
    </div>
    <div class="wrapper-home-content">
        <div class="center-align">
            <span class="title center-align">
                PESAN LAPANGAN
            </span>
        </div>
        <hr class="underline">
        <p class="desc center-align">Sedang Baper? Pesan Lapangan di Go-Foot sekarang!</p>
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://go-foot.creatonomics.id/assets/pic/lapangan.jpg">
                        <span style="font-weight:600;font-size: 30px" class="title-jadwal card-title">Lapangan 1</span>
                    </div>
                    <div class="card-action">
                        <?php if ($this->session->userdata('username') !== "admin"){?>
                        <a href="<?=base_url()?>Booking?l=1">
                            <button style="background-color:#015249;border-color: transparent;width: 100%; padding: 10px;" type="submit">
                                <span style="color: white; font-weight: 600;font-family: 'Montserrat', sans-serif;">PESAN SEKARANG</span>
                            </button>
                        </a>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://go-foot.creatonomics.id/assets/pic/lapangan.jpg">
                        <span style="font-weight:600;font-size: 30px" class="title-jadwal card-title">Lapangan 2</span>
                    </div>
                    <div class="card-action">
                        <?php if ($this->session->userdata('username') !== "admin"){?>
                        <a href="<?=base_url()?>Booking?l=2">
                            <button style="background-color:#015249;border-color: transparent;width: 100%; padding: 10px;" type="submit">
                                <span style="color: white; font-weight: 600;font-family: 'Montserrat', sans-serif;">PESAN SEKARANG</span>
                            </button>
                        </a>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image">
                        <img src="http://go-foot.creatonomics.id/assets/pic/lapangan.jpg">
                        <span style="font-weight:600;font-size: 30px" class="title-jadwal card-title">Lapangan 3</span>
                    </div>
                    <div class="card-action">
                        <?php if ($this->session->userdata('username') !== "admin"){?>
                        <a href="<?=base_url()?>Booking?l=3">
                            <button style="background-color:#015249;border-color: transparent;width: 100%; padding: 10px;" type="submit">
                                <span style="color: white; font-weight: 600;font-family: 'Montserrat', sans-serif;">PESAN SEKARANG</span>
                            </button>
                        </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 80px;" class="center-align">
            <span class="title">
                LAPANGAN
            </span>
            <hr class="underline">
            <p class="desc center-align">Anda dapat melihat kondisi lapangan sebelum melakukan booking</p>
        </div>
        <div class="row">
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="http://go-foot.creatonomics.id/assets/pic/lapangan.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Lapangan 1
                            <i class="material-icons right">more_vert</i>
                        </span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Detail Lapangan 1
                            <i class="material-icons right">close</i>
                        </span>
                        <p>Jenis rumput: Rumput sintetis</p>
                        <p>Kondisi rumput: 95% baik.</p>
                        <p>Jumlah bola: 2</p>
                        <p>Kondisi gawang: 100% baik</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="http://go-foot.creatonomics.id/assets/pic/lapangan.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Lapangan 2
                            <i class="material-icons right">more_vert</i>
                        </span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Detail Lapangan 2
                            <i class="material-icons right">close</i>
                        </span>
                        <p>Jenis rumput: Rumput sintetis</p>
                        <p>Kondisi rumput: 95% baik.</p>
                        <p>Jumlah bola: 2</p>
                        <p>Kondisi gawang: 100% baik</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="http://go-foot.creatonomics.id/assets/pic/lapangan.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Lapangan 3
                            <i class="material-icons right">more_vert</i>
                        </span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Detail Lapangan 3
                            <i class="material-icons right">close</i>
                        </span>
                        <p>Jenis rumput: Rumput sintetis</p>
                        <p>Kondisi rumput: 95% baik.</p>
                        <p>Jumlah bola: 2</p>
                        <p>Kondisi gawang: 100% baik</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer-text center-align">
            <span class="contact-text">KONTAK KAMI</span>
            <hr class="underline">
            <div style="margin-top: 20px;" class="row">
                <span>
                    <img hspace="40" src="http://go-foot.creatonomics.id/assets/icons/phone.png" class="icon-navbar">
                </span>
                <span>
                    <img hspace="40" src="http://go-foot.creatonomics.id/assets/icons/ig.png" class="icon-navbar">
                </span>
                <span>
                    <img hspace="40" src="http://go-foot.creatonomics.id/assets/icons/facebook-logo-button.png" class="icon-navbar">
                </span>
                <span>
                    <img hspace="40" src="http://go-foot.creatonomics.id/assets/icons/line.png" class="icon-navbar">
                </span>
            </div>
            <p class="address-text">Jalan Kebaperan no.140, Malang, 65145</p>
            <div class="groupmember-text">
                <span>Mahendra Okza - Farhan Setya - Bagus Priambodo</span>
            </div>
        </div>
    </footer>

    <script src="http://go-foot.creatonomics.id/assets/js/home.js"></script>
    
    
</body>

</html>