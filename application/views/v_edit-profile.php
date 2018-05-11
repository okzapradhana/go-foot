<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profil</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/edit-profil.css">
</head>

<body>
    <div class="wrapper-profil">
        <div class="center-align">
            <span class="title">EDIT PROFIL</span>
            <hr style="width: 200px;border-width:1px;border-color:#015249">
        </div>
        <form class="form" action="<?= base_url()?>EditProfil/updateProfile" method="POST">
            <div class="row center-align">
                <div class="input-field col l12 s12 m12">
                    <input name="nama" id="nama" disabled type="text" value="<?php echo $nama;?>" class="validate">
                    <label for="nama">Nama lengkap</label>
                </div>
            </div>
            <div class="row center-align">
                <div class="input-field col l12 s12 m12">
                    <input name="email" id="email" type="email" value="<?php echo $email;?>" class="validate">
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right">Harus mengandung '@'</span>
                </div>
            </div>
            <div class="row center-align">
                <div class="input-field col l12 s12 m12">
                    <input name="no_telepon" id="no_telepon" type="tel" value="<?php echo $hp;?>" class="validate">
                    <label for="no_telepon">No telepon</label>
                </div>
            </div>
            <div class="row center-align">
                <div class="input-field col l12 s12 m12">
                    <input name="username" id="username" disabled type="text" value="<?php echo $username;?>" class="validate">
                    <label for="username">Username</label>
                </div>
            </div>
            <div class="row center-align">
                <div class="input-field col l12 s12 m12">
                    <input name="password" id="password" type="password" value="<?php echo $password;?>" class="validate">
                    <label for="password">Password</label>
                </div>
                <a href="./v_home.html">
                    <button type="submit" name="submit" class="btn waves-light waves-effect">EDIT PROFIL</button>
                </a>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://go-foot.creatonomics.id/materialize/js/materialize.min.js"></script>
    <script src="http://go-foot.creatonomics.id/assets/js/dropdown.js"></script>

</body>

</html>