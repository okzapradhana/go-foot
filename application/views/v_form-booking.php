<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Booking</title>
    <link rel="stylesheet" type="text/css" media="screen" href="http://go-foot.creatonomics.id/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="http://go-foot.creatonomics.id/assets/css/form-booking.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    
    <div class="wrapper-booking">
        <div class="center-align">
            <span class="title">FORM BOOKING</span>
            <hr style="width: 200px;border-width:1px;border-color:#015249">
        </div>
        <form action="<? echo base_url() . 'Booking/add?l='. $lap?>" method="POST">
            <div style="margin-top: 80px;" class="row">
                <div class="input-field col s12 m12 l6">
                    <input id="nama" style="width: 90%" disabled value="<?=$nama?>" type="text" class="validate" name="nama">
                    <label for="nama">Nama pemesan</label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <input id="telepon" style="width: 90%" disabled value="<?=$hp?>" type="tel" class="validate" name="no_telepon">
                    <label for="telepon">No. Telepon</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l6">
                    <input disabled id="tanggal" style="width: 90%" value="<?=date('Y-m-d')?>" type="date" class="validate" name="tanggal">
                    <label for="tanggal">Tanggal pesan</label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <input id="lapangan" style="width: 90%" disabled value="Lapangan <?=$lap?>" type="text" class="validate" name="lapangan">
                    <label for="lapangan">Lapangan</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l6">
                    <select id="jam_mulai" name ="jam_mulai">
                      <option value="" disabled selected>Pilih Jam mulai</option>
                      <option value="08:00">08:00</option>
                      <option value="09:00">09:00</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                      <option value="17:00">17:00</option>
                      <option value="18:00">18:00</option>
                      <option value="19:00">19:00</option>
                      <option value="20:00">20:00</option>
                      
                    </select>
                    <label>Jam mulai</label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <select id="jam_selesai" name ="jam_selesai">
                      <option value="" disabled selected>Pilih Jam selesai</option>
                      <option value="09:00">09:00</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                      <option value="17:00">17:00</option>
                      <option value="18:00">18:00</option>
                      <option value="19:00">19:00</option>
                      <option value="20:00">20:00</option>
                      <option value="21:00">21:00</option>
                    </select>
                    <label>Jam selesai</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 m12 l6">
                    <input value="0" id="total_harga" style="width: 90%" disabled type="text" class="validate" name="total_harga">
                    <label for="total_harga">Total harga</label>
                </div>
            </div>
            <div class="center-align">
                <a href="#">
                    <button type="submit" name="submit" class="btn waves-light waves-effect">PESAN</button>
                </a>
            </div>
        </form>
    </div>
    <script src="http://go-foot.creatonomics.id/assets/js/input.js"></script>
    <script>
        $('#jam_mulai').change(function(){
            if(Number($('#jam_mulai').val().substring(0, 2)) > Number($('#jam_selesai').val().substring(0, 2))){
                $('#total_harga').val(0)
            } else {
                $('#total_harga').val((Number($('#jam_selesai').val().substring(0, 2)) - Number($('#jam_mulai').val().substring(0, 2))) * 50000)
            }
        })
        
        $('#jam_selesai').change(function(){
            if(Number($('#jam_mulai').val().substring(0, 2)) > Number($('#jam_selesai').val().substring(0, 2))){
                $('#total_harga').val(0)
            } else {
            $('#total_harga').val((Number($('#jam_selesai').val().substring(0, 2)) - Number($('#jam_mulai').val().substring(0, 2))) * 50000)
            }
        })
    </script>
</body>

</html>