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
      <span class="input-group-btn">
        <a href="<?=site_url("admin/news/tambah")?>"><button type="button" class="btn btn-primary btn-flat">Add new record</button></a>
      </span>

      <div id="PeopleTableContainer"></div>
      <script type="text/javascript">

          $(document).ready(function () {

              //Prepare jTable
              $('#PeopleTableContainer').jtable({
                  title: 'Tabel Tambah Antrian',
                  paging: true,
                  pageSize: 10,
                  sorting: true,
                  defaultSorting: 'nomer ASC',
                  actions: 
                  {
                       listAction: '<?=base_url()?>index.php/admin/news/listnews',
                       deleteAction: '<?=base_url()?>index.php/admin/news/hapusnews'
                       // createAction: '<?=base_url()?>index.php/antriandokter/listantrian'              
                  },
                  fields: 
                  {                   
                      id_news: 
                      {
                          key: true,
                          create: false,
                          edit: false,
                          list: false
                      },
                      judul_news: 
                      {
                          title: 'Judul'
                      },  
                      isi_news: 
                      {
                          title: 'Ringkasan'
                      },
                      lihat:
                      {
                          title: 'Edit',
                          display: function (data) 
                          {
                              return '<a href="<?php echo site_url() ?>admin/news/updateviewnews/'+ data.record.id_news +'">Edit</a>';
                          },
                          edit: false,
                          sorting: false,
                          create: false
                      }
                  },
              });

              //Load person list from server
              $('#PeopleTableContainer').jtable('load');
          });

      </script>
      
    </section><!-- /.content -->
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->