<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/leaflet.css">
<!-- <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" /> -->
<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script> 

<div class="container">
  <section >
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Horizontal Form</h3>
      </div>
      <form class="form-horizontal" id="myform" method="POST" action="<?php echo site_url("admin/event/updateevent");?>" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Event</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?php echo $nama_event?>" >
              <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id_event?>" >
              <input type="hidden" class="form-control" id="lat" name="lat" value="<?php echo $lat_event?>" >
              <input type="hidden" class="form-control" id="lang" name="lang" value="<?php echo $lang_event?>" >
            </div>
          </div>
          <h3 class="box-title">Waktu event</h3>
          <?php echo $lat_event; ?>
          <?php echo $lang_event; ?>
          <div class="form-group">
            <label class="col-sm-2 control-label">Rentang Waktu Event</label>
              <div class="col-sm-6"> 
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control" id="reservationtime" name="reservationtime" value="<?php echo $baru?>" >
                </div>
              </div>
          </div>
          <h3 class="box-title">Lokasi event</h3>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kota</label>
            <div class="col-sm-6">
                <select id="kota" name="kota" class="form-control select2" style="width: 100%;" >
                  <?php 
                        foreach($kota as $row)
                        { 
                          ?><option <?php if ($row->id_kota == $id_kota_event) {?>selected="selected" <?php }?> value = "<?php echo $row->id_kota ?>"> <?php echo "$row->nama_kota"?> </option><?php
                        }
                    ?>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Negara</label>
            <div class="col-sm-6">
                <select class="form-control select2" style="width: 100%" id="negara" name="negara" value=<?php echo $id_negara_event;?>>
                    <?php 
                        foreach($negara as $row)
                        { 
                          ?><option <?php if ($row->id_negara == $id_negara_event) {?>selected="selected" <?php }?> value= "<?php echo $row->id_negara ?>"> <?php echo "$row->nama_negara"?> </option><?php
                        }
                    ?>
                </select>
                </select>
            </div>
          </div>
        <style>
        #map { height: 320px; width: 500px }
        </style>
        <div class="form-group">
           <label class="col-sm-2 control-label">Lokasi</label>
          <div class="col-sm-1">
            <input type="hidden" class="form-control" id="latlang" name="latlang" >
            <!-- <input type="hidden" name="latlang" value=""> -->
            <div id="map"></div>
            
          </div>
        </div>
        <script>
        var lat = "<?php echo $lat_event; ?>";
          var lang = "<?php echo $lang_event; ?>";
          var map = L.map('map').setView([0.27, 115.81], 5);
          ACCESS_TOKEN = 'pk.eyJ1IjoibGlkb2tyaSIsImEiOiJjaWxweHNleDgwOGxodXpseTlzYjBkYzduIn0.zvZZfUYRA_verztcO7xv8w';
          L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + ACCESS_TOKEN, {
              attribution: 'Imagery © <a href="http://mapbox.com">Mapbox</a>',
              id: 'mapbox.streets'
          }).addTo(map);
         marker = new L.marker([lat,lang]).addTo(map);
         
          var popup = L.popup();
          // var latlang;

          function onMapClick(e) {
              // setLatLng(e.latlng);
              
              popup
                  .setLatLng(e.latlng)
                  .setContent("You clicked the map at " + e.latlng.toString())
                  .openOn(map);
                  document.getElementById("latlang").value = e.latlng.toString();

          }

          map.on('click', onMapClick);
          
          // map.on('click', function getmap(e) {
          //     return e.latlng.toString();
          // });
        </script>
          <h3 class="box-title">Lain-lain</h3>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tipe Event</label>
            <div class="col-sm-6">
                <select class="form-control select2" style="width: 100%;" id="tipe" name="tipe" value=<?php echo $tipe_event;?>>
                  <!-- <option value="IT"  >Information Technology</option> -->
                  <option value="Course" <?php if ($tipe_event == "Course") echo "selected='selected'";?>>Course</option>
                  <option value="Confrence" <?php if ($tipe_event == "Confrence") echo "selected='selected'";?>>Confrence</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Link Pendaftaran</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="link" name="link" placeholder="Link" value=<?php echo $register_event;?>>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Gambar Event</label>
            <div class="col-sm-6">
              <input type="file" name="userfile"  />
              <img class='img-responsive' src='<?php echo base_url() ?>assets/gambar/event/<?php echo $nama;?>' alt='Photo'>
            </div>
          </div>
           <td>Maksimal Ukuran Gambar adalah 1 MB. jika gambar memiliki ukuran melebihi dari itu</td>
            <td>maka akan gagal upload. jika melebihi gambar harus dikecilkan. berikut link untuk mengecilkan </td>
            gambar
            <td><a href="https://imageresizer.codeplex.com/">Link</a></td>
          <!-- <div class="form-group">
            <div class="col-sm-6 col-md-offset-2">
              <input type="radio" name="action" id="track" value="track" /><label for="track">Tidak ada</label><br />
              <input type="radio" name="action" id="event" value="event"  /><td><label for="event">Ada</label></td><td><input type="text"></td><br/>
            </div>                      
            </div>
          </div> -->
          <div class="box-footer mid">
            <a href="<?=site_url("admin/event")?>"><button type="button" class="btn btn-default">Cancel</button></a>
            <button type="submit" class="btn btn-info right"  onclick="return getmap();" name="pos">Submit</button>
          </div>
        </div>
 
      </form>
    </div>
  </section>
</div>

 <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'YYYY-MM-DD HH:mm '});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
