<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar di Go-Foot</title>
    <link rel="stylesheet" href="http://go-foot.creatonomics.id/assets/css/login-register.css">
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
</head>

<body bgcolor="#57BC90">
    <div class="wrapper">

        <div class="form">
            <div class="center-align">
                <p class="text">
                    REGISTER
                </p>
            </div>
            <div class="row">
                <form method="POST" action="Register/tambah_aksi">
                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            <input id="namalengkap" type="text" name="namalengkap" class="validate">
                            <label for="namalengkap">Nama lengkap</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email">Email</label>
                            <span class="helper-text" data-error="wrong" data-success="right">Harus mengandung '@'</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            <input id="no_telepon" type="tel" name="no_telepon" class="validate">
                            <label for="no_telepon">No Telepon</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            <input id="username" type="text" name="username" class="validate">
                            <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l12 m12">
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="center-align">
                            <button class="btn waves-light waves-effect" type="submit" name="submit" style="width:50%;background-color:#015249;color:white">
                                <span class="button-text">MASUK</span>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="center-align">Sudah memiliki akun? <a href="<?echo base_url();?>/Login">Masuk disini</a></p>                
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://go-foot.creatonomics.id/materialize/js/materialize.min.js"></script>
    <script>
        $('.btn').click(function(){
            location.reload()
        })
    </script>
</body>

</html>