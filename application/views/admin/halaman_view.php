<link href="<?php echo base_url() ?>assets/admin/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
 
<!-- Import Javascript files for validation engine (in Head section of HTML) -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine-en.js"></script>


<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Halaman
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div id="PeopleTableContainer"></div>
      <script type="text/javascript">

          $(document).ready(function () {

              //Prepare jTable
              $('#PeopleTableContainer').jtable({
                  title: 'List Halaman',
                  paging: true,
                  pageSize: 10,
                  sorting: true,
                  defaultSorting: 'nomer ASC',
                  actions: 
                  {
                       listAction: '<?=base_url()?>index.php/admin/halaman/listhalaman',
                       updateAction: '<?=base_url()?>index.php/admin/halaman/updatehalaman',
                       // deleteAction:'<?=base_url()?>index.php/admin/halaman/hapushalaman',
                       createAction: function (postData) {
                            // window.location = '<?=base_url()?>index.php/listobat/lihatobat/';
                            console.log("creating from custom function...");
                            return $.Deferred(function ($dfd) {
                                $.ajax({
                                    url: '<?=base_url()?>index.php/admin/halaman/createhalaman',
                                    type: 'POST',
                                    dataType: 'json',
                                    data: postData,
                                    success: function (data) {
                                        console.log(data);
                                        $dfd.resolve(data);
                                    },
                                    error: function () {
                                        $dfd.reject();
                                    }
                                });
                            });
                        }
                  //      // createAction: '<?=base_url()?>index.php/admin/halaman/createhalaman'              
                  },
                  fields: 
                  {                   
                      id_halaman: 
                      {
                          key: true,
                          create: false,
                          edit: false,
                          list: false
                      },
                      judul_halaman: 
                      {
                          title: 'Judul Halaman'
                      },  
                      isi_halaman: 
                      {
                          title: 'Isi Halaman',
                          type: 'textarea',
                          list: false   
                      }
                  },
                  formCreated: function(event, data) {
                      isi_halaman = CKEDITOR.replace('isi_halaman', { 
                        extraPlugins: 'imageuploader'
                        // filebrowserBrowseUrl :'<?php echo base_url() ?>assets/admin/plugins/ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo base_url() ?>assets/admin/plugins/ckeditor/filemanager/connectors/php/connector.php',
                        // filebrowserImageBrowseUrl : '<?php echo base_url() ?>assets/admin/plugins/ckeditor/filemanager/browser/default/browser.html?Type=Image&amp;Connector=<?php echo base_url() ?>assets/admin/plugins/ckeditor/filemanager/connectors/php/connector.php',
                        // filebrowserFlashBrowseUrl :'<?php echo base_url() ?>assets/admin/plugins/ckeditor/filemanager/browser/default/browser.html?Type=Flash&amp;Connector=<?php echo base_url() ?>assets/admin/plugins/ckeditor/filemanager/connectors/php/connector.php'
                      });
                      $($(data.form.parent()).parent()).css('left', '350px');
                      $($(data.form.parent()).parent()).css('top', '80px');
                      data.form.find(isi_halaman).addClass('validate[required]');
                      data.form.validationEngine();
                  },
                  formSubmitting: function (event, data) {
                      $('textarea#Edit-isi_halaman').val(isi_halaman.getData());
                      return data.form.validationEngine('validate');
                  },
                  //Dispose validation logic when form is closed
                  formClosed: function (event, data) {
                      data.form.validationEngine('hide');
                      data.form.validationEngine('detach');
                      isi_halaman.destroy();
                  }
              });

              //Load person list from server
              $('#PeopleTableContainer').jtable('load');
          });

      </script>
      
    </section><!-- /.content -->
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->