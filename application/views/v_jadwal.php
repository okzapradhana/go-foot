<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Jadwal Go-Foot</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/jadwal.css">
</head>

<body>
    
    <div class="wrapper-jadwal">
        <div class="center-align">
            <span class="title">JADWAL</span>
            <hr style="width: 200px;border-width:1px;border-color:#015249">
        </div>
        <table class="table highlight">
            <thead>
                <tr>
                    <th>JAM MULAI</th>
                    <th>JAM SELESAI</th>
                    <th>LAPANGAN</th>
                </tr>
            </thead>

            <tbody>
                <?php
	                foreach($jadwal->result() as $row){?>
		            <tr>
			            <td><?=$row->start_time;?></td>
			            <td><?=$row->end_time;?></td>
			            <td><?=$row->id_lapangan;?></td>
		            </tr>
	            <?php } ?>
            </tbody>
        </table>
        <div class="center-align">
            <p class="text-note">Jadwal operasional: 08.00 - 21.00</p>
        </div>
    </div>
    
</body>

</html>