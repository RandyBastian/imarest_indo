<link href="<?php echo base_url() ?>assets/admin/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
 
<!-- Import Javascript files for validation engine (in Head section of HTML) -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine-en.js"></script>


<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Top Navigation
        <small>Example 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Layout</a></li>
        <li class="active">Top Navigation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div id="PeopleTableContainer"></div>
      <script type="text/javascript">

          $(document).ready(function () {

              //Prepare jTable
              $('#PeopleTableContainer').jtable({
                  title: 'Tabel Galeri',
                  paging: true,
                  pageSize: 10,
                  sorting: true,
                  defaultSorting: 'nomer ASC',
                  actions: 
                  {
                      listAction: '<?=base_url()?>index.php/admin/upload/listupload',
                      updateAction: '<?=base_url()?>index.php/admin/upload/updateupload',
                      deleteAction: '<?=base_url()?>index.php/admin/upload/hapusupload',
                      createAction: '<?=base_url()?>index.php/admin/upload/createupload'              
                  },
                  fields: 
                  {                   
                      id_galeri: 
                      {
                          key: true,
                          create: false,
                          edit: false,
                          list: false
                      },
                      nama_galeri: 
                      {
                          title: 'Nama Galeri'
                      },
                      tanggal_buat_galeri: 
                      {
                          title: 'Tanggal Buat',
                          edit: false,
                          create: false
                      },
                      lihat:
                      {
                          title: 'Lihat Galeri',
                          display: function (data) 
                          {
                              return '<a href="<?php echo site_url() ?>admin/Upload/hasilupload/'+ data.record.id_galeri +'">Lihat</a>';
                          },
                          edit: false,
                          sorting: false,
                          create: false
                      }
                  }
              });

              //Load person list from server
              $('#PeopleTableContainer').jtable('load');
          });

      </script>
      
    </section><!-- /.content -->
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->