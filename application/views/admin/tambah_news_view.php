<div class="container">
  <section >
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Horizontal Form</h3>
      </div>
      <form class="form-horizontal" id="myform" method="POST" action="<?php echo site_url("admin/news/createnew");?>" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Judul</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" id="judul" name="judul" placeholder="judul">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Isi</label>
            <div class="col-sm-6">
              <input type="textarea" class="form-control" id="isi" name="isi" placeholder="isi">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Gambar</label>
            <div class="col-sm-6">
              <input type="file" name="userfile"  />
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
            <a href="<?=site_url("admin/News")?>"><button type="button"class="btn btn-default">Cancel</button></a>
            <button type="submit" class="btn btn-info right" onclick="document.getElementById('isi').value=CKEDITOR.instances.isi.getData();">Submit</button>
          </div>
        </div>
 
      </form>
    </div>
    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'isi' );
            </script>
  </section>
</div>

 
