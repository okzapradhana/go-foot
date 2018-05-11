<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Booking</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/history-booking.css">
</head>

<body>
    
    <div class="wrapper-history">
        <div class="center-align">
            <?php if($nama === 'Admin'){?>
                <span class="title">HISTORY BOOKING PEMESAN</span>
            <?php } else {?>
                <span class="title">HISTORY BOOKING</span>
            <?php }?>
            <hr style="width: 200px;border-width:1px;border-color:#015249">
        </div>
        <table class="table highlight">
            <thead>
                <tr>
                    <?php if($nama === 'Admin'){?>
                    <th>NAMA PEMESAN</th>
                    <?php }?>
                    <th>TANGGAL PESAN</th>
                    <th>LAPANGAN</th>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                    <th>TOTAL HARGA</th>
                    <th>STATUS</th>
                    <?php if($nama === 'Admin'){?>
			        <th>HAPUS PESANAN</th>
			        <?php }?>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <?php
	                foreach($history->result() as $row){?>
		            <tr>
		                <?php if($nama === 'Admin'){?>
			                <td><?=$row->nama;?></td>
			            <?php }?>
			         
			            <td><?=$row->date;?></td>
			            <td><?=$row->id_lapangan;?></td>
			            <td><?=$row->start_time;?></td>
			            <td><?=$row->end_time;?></td>
			            <td><?=$row->price;?></td>
			            <td><? date_default_timezone_set("Asia/Jakarta");
			             $time = date("H:i:sa");
			             $end = $row->end_time;
			             $start = $row->start_time;
			            if($time < $start){
			                $status = "Booked";
			            }else if($time >= $start && $time < $end){
			                $status = "Playing";
			            }else $status ="Played";
			            echo $status; ?></td>
			            <?php if($nama === 'Admin'){?>
			                <td class="center-align">
			                    <?php if($status=='Booked'){?><a href="<?php echo base_url().'Booking/deletePesanan/'.$row->id_jadwal;?>">
			                    <img src="http://go-foot.creatonomics.id/assets/icons/delete.png" class="icon-navbar">
			                    <?}?>
			                    </a>
			                </td>
			            <?php }?>
		            </tr>
	            <?php } ?>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://go-foot.creatonomics.id/materialize/js/materialize.min.js"></script>
    <script src="http://go-foot.creatonomics.id/assets/js/dropdown.js"></script>
</body>

</html>