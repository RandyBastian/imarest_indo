<div class="container">
  <section >
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Horizontal Form</h3>
      </div>
      <form class="form-horizontal" id="myform" method="POST" action="<?php echo site_url("admin/event/createnew");?>" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Nama Event</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
            </div>
          </div>
          <h3 class="box-title">Waktu event</h3>
          <div class="form-group">
            <label class="col-sm-2 control-label">Rentang Waktu Event</label>
              <div class="col-sm-6"> 
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text" class="form-control" id="reservationtime" name="reservationtime" >
                </div>
              </div>
          </div>
          <h3 class="box-title">Lokasi event</h3>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kota</label>
            <div class="col-sm-6">
                <select id="kota" name="kota" class="form-control select2" style="width: 100%;">
                  <?php 
                        foreach($kota as $row)
                        { 
                          echo '<option value="'.$row->id_kota.'">'.$row->nama_kota.'</option>';
                        }
                    ?>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Negara</label>
            <div class="col-sm-6">
                <select class="form-control select2" style="width: 100%" id="negara" name="negara">
                    <?php 
                        foreach($negara as $row)
                        { 
                          echo '<option value="'.$row->id_negara.'">'.$row->nama_negara.'</option>';
                        }
                    ?>
                </select>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Latitude</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="lat" name="lat" placeholder="Latitude">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Longitude</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="lang" name="lang" placeholder="Longitude">
            </div>
          </div>
          <h3 class="box-title">Lain-lain</h3>
          <div class="form-group">
            <label class="col-sm-2 control-label">Tipe Event</label>
            <div class="col-sm-6">
                <select class="form-control select2" style="width: 100%;" id="tipe" name="tipe">
                   <option value="Course">Course</option>
                  <option value="Training">Training</option>
                  <option value="Confrence">Confrence</option>
                </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Link Pendaftaran</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="link" name="link" placeholder="Link">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Gambar Event</label>
            <div class="col-sm-6">
              <input type="file" name="userfile"  />
            </div>
          </div>
          
          <!-- <div class="form-group">
            <div class="col-sm-6 col-md-offset-2">
              <input type="radio" name="action" id="track" value="track" /><label for="track">Tidak ada</label><br />
              <input type="radio" name="action" id="event" value="event"  /><td><label for="event">Ada</label></td><td><input type="text"></td><br/>
            </div>                      
            </div>
          </div> -->
          <div class="box-footer mid">
            <button type="submit" class="btn btn-default">Cancel</button>
            <button type="submit" class="btn btn-info right">Submit</button>
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
