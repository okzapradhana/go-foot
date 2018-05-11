<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login di Go-Foot</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/assets/css/login-register.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
</head>

<body bgcolor="#57BC90">
    <div class="wrapper">
        <div class="center-align">
            <div class="form">
                <p class="text">
                    LOGIN
                </p>
                <div class="row">
                    <form method="POST" action="<?=base_url()?>Login/login">
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
                            <button class="btn waves-light waves-effect" type="submit" name="submit" style="width:50%;background-color:#015249;color:white">
                                <span class="button-text">MASUK</span>
                            </button>
                        </div>
                    </form>
                    <p>Belum memiliki akun? <a href="<?echo base_url();?>Register">Daftar disini</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="http://go-foot.creatonomics.id/materialize/js/materialize.min.js"></script>
</body>

</html>