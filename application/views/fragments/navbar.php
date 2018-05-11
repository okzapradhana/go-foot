<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/navbar.css">
    
    
</head>

<body>
    <?php if($this->session->userdata('status') === "login"){?>
    <?php if($this->session->userdata('username') === "admin"){?>
        <ul id="dropdown-user" class="dropdown-content">
        <li>
            <a href="<?=base_url();?>Home_controller/history">
                <img src="http://go-foot.creatonomics.id/assets/icons/report.png" class="icon-navbar">HISTORY</a>
        </li>
        <li>
            <a href="<?=base_url();?>Login/logout">
                <img src="http://go-foot.creatonomics.id/assets/icons/exit.png" class="icon-navbar">LOGOUT</a>
        </li>
    </ul>
    <div class="navbar-fixed">
        <nav class="navbar">
            <div class="nav-wrapper">
                <a href="<?=base_url();?>" class="brand-logo">
                    <img style="height: 35px;width:150px; margin-left: 30px;" src="http://go-foot.creatonomics.id/assets/logo/logo.png">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li style="width: 150px";>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown-user">
                            <img src="http://go-foot.creatonomics.id/assets/icons/user.png" class="icon-navbar"><?=$nama?></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
        
    <?php } else{ ?>
    
    <ul id="dropdown-user" class="dropdown-content">
        <li>
            <a href="<?= base_url();?>EditProfil/index">
                <img src="http://go-foot.creatonomics.id/assets/icons/user-edit-button.png" class="icon-navbar">EDIT PROFILE</a>
        </li>
        <li>
            <a href="<?=base_url();?>Home_controller/history">
                <img src="http://go-foot.creatonomics.id/assets/icons/report.png" class="icon-navbar">HISTORY</a>
        </li>
        <li>
            <a href="<?=base_url();?>Login/logout">
                <img src="http://go-foot.creatonomics.id/assets/icons/exit.png" class="icon-navbar">LOGOUT</a>
        </li>
    </ul>
    <div class="navbar-fixed">
        <nav class="navbar">
            <div class="nav-wrapper">
                <a href="<?=base_url();?>" class="brand-logo">
                    <img style="height: 35px;width:150px; margin-left: 30px;" src="http://go-foot.creatonomics.id/assets/logo/logo.png">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="<?=base_url();?>Home_controller/jadwal">
                            <img src="http://go-foot.creatonomics.id/assets/icons/calendar.png" class="icon-navbar"> JADWAL</a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="dropdown-user">
                            <img src="http://go-foot.creatonomics.id/assets/icons/user.png" class="icon-navbar"><?=$nama?></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <?php }?>
    <?php } else{ ?>
    <div class="navbar-fixed">
        <nav class="navbar">
            <div class="nav-wrapper">
                <a href="<?=base_url();?>" class="brand-logo">
                    <img style="height: 35px;width:150px; margin-left: 30px;" src="http://go-foot.creatonomics.id/assets/logo/logo.png">
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="<?=base_url();?>Home_controller/jadwal">
                            <img src="http://go-foot.creatonomics.id/assets/icons/calendar.png" class="icon-navbar"> JADWAL</a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="<?echo base_url();?>Login" data-target="dropdown-user">
                            <img src="http://go-foot.creatonomics.id/assets/icons/user.png" class="icon-navbar">LOGIN</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <?php }?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://go-foot.creatonomics.id/materialize/js/materialize.min.js"></script>
    <script src="http://go-foot.creatonomics.id/assets/js/dropdown.js"></script>
    
</body>

<!--<ul id="nav-mobile" class="side-nav" style="background-color: #003368">-->
<!--    <li><div class="user-view" style="height: 120px;">-->
<!--  </div></li>-->
<!--  <?php if($this->session->userdata('status') === "login"){?>-->
<!--    <?php if($this->session->userdata('username') === "admin"){?>-->
<!--        <ul id="dropdown-user" class="dropdown-content">-->
<!--        <li>-->
<!--            <a href="<?=base_url();?>Home_controller/history">-->
<!--                <img src="http://go-foot.creatonomics.id/assets/icons/report.png" class="icon-navbar">HISTORY</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="<?=base_url();?>Login/logout">-->
<!--                <img src="http://go-foot.creatonomics.id/assets/icons/exit.png" class="icon-navbar">LOGOUT</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <div class="navbar-fixed">-->
<!--        <nav class="navbar">-->
<!--            <div class="nav-wrapper">-->
<!--                <a href="<?=base_url();?>" class="brand-logo">-->
<!--                    <img style="height: 35px;width:150px; margin-left: 30px;" src="http://go-foot.creatonomics.id/assets/logo/logo.png">-->
<!--                </a>-->
<!--                <ul id="nav-mobile" class="right hide-on-med-and-down">-->
<!--                    <li style="width: 150px";>-->
<!--                        <a class="dropdown-trigger" href="#!" data-target="dropdown-user">-->
<!--                            <img src="http://go-foot.creatonomics.id/assets/icons/user.png" class="icon-navbar"><?=$nama?></a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->
        
<!--    <?php } else{ ?>-->
    
<!--    <ul id="dropdown-user" class="dropdown-content">-->
<!--        <li>-->
<!--            <a href="<?= base_url();?>EditProfil/index">-->
<!--                <img src="http://go-foot.creatonomics.id/assets/icons/user-edit-button.png" class="icon-navbar">EDIT PROFILE</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="<?=base_url();?>Home_controller/history">-->
<!--                <img src="http://go-foot.creatonomics.id/assets/icons/report.png" class="icon-navbar">HISTORY</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="<?=base_url();?>Login/logout">-->
<!--                <img src="http://go-foot.creatonomics.id/assets/icons/exit.png" class="icon-navbar">LOGOUT</a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <div class="navbar-fixed">-->
<!--        <nav class="navbar">-->
<!--            <div class="nav-wrapper">-->
<!--                <a href="<?=base_url();?>" class="brand-logo">-->
<!--                    <img style="height: 35px;width:150px; margin-left: 30px;" src="http://go-foot.creatonomics.id/assets/logo/logo.png">-->
<!--                </a>-->
<!--                <ul id="nav-mobile" class="right hide-on-med-and-down">-->
<!--                    <li>-->
<!--                        <a href="<?=base_url();?>Home_controller/jadwal">-->
<!--                            <img src="http://go-foot.creatonomics.id/assets/icons/calendar.png" class="icon-navbar"> JADWAL</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="dropdown-trigger" href="#!" data-target="dropdown-user">-->
<!--                            <img src="http://go-foot.creatonomics.id/assets/icons/user.png" class="icon-navbar"><?=$nama?></a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->
<!--    <?php }?>-->
<!--    <?php } else{ ?>-->
<!--    <div class="navbar-fixed">-->
<!--        <nav class="navbar">-->
<!--            <div class="nav-wrapper">-->
<!--                <a href="<?=base_url();?>" class="brand-logo">-->
<!--                    <img style="height: 35px;width:150px; margin-left: 30px;" src="http://go-foot.creatonomics.id/assets/logo/logo.png">-->
<!--                </a>-->
<!--                <ul id="nav-mobile" class="right hide-on-med-and-down">-->
<!--                    <li>-->
<!--                        <a href="<?=base_url();?>Home_controller/jadwal">-->
<!--                            <img src="http://go-foot.creatonomics.id/assets/icons/calendar.png" class="icon-navbar"> JADWAL</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a class="dropdown-trigger" href="<?echo base_url();?>Login" data-target="dropdown-user">-->
<!--                            <img src="http://go-foot.creatonomics.id/assets/icons/user.png" class="icon-navbar">LOGIN</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->
    
<!--    <?php }?>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--    <script src="http://go-foot.creatonomics.id/materialize/js/materialize.min.js"></script>-->
<!--    <script src="http://go-foot.creatonomics.id/assets/js/dropdown.js"></script>-->
<!--</ul>-->

</html>