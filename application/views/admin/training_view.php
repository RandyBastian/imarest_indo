<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Training
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <span class="input-group-btn">
        <a href="<?=site_url("admin/training/tambah")?>"><button type="button" class="btn btn-primary btn-flat">Add new record</button></a>
      </span>

      <div id="PeopleTableContainer"></div>
      <script type="text/javascript">

          $(document).ready(function () {

              //Prepare jTable
              $('#PeopleTableContainer').jtable({
                  title: 'List Training',
                  paging: true,
                  pageSize: 10,
                  sorting: true,
                  defaultSorting: 'nomer ASC',
                  actions: 
                  {
                       listAction: '<?=base_url()?>index.php/admin/event/listtraining',
                      deleteAction: '<?=base_url()?>index.php/admin/event/hapusevent'
                       // createAction: '<?=base_url()?>index.php/antriandokter/listantrian'              
                  },
                  fields: 
                  {                   
                      id_event: 
                      {
                          key: true,
                          create: false,
                          edit: false,
                          list: false
                      },
                      nama_event: 
                      {
                          title: 'Nama Event'
                      },  
                      lat_event: 
                      {
                          title: 'lattitude',
                          list: false
                      },
                      lang_event: 
                      {
                          title: 'longitude',
                          list: false                     
                      },
                      id_kota_event: 
                      {
                          title: 'Kota',
                          options: 'training/get_kota'                          
                      },
                      id_negara_event: 
                      {
                          title: 'Negara',
                          options: 'training/get_negara'                        
                      },
                      tanggal_mulai_event: 
                      {
                          title: 'Tanggal Mulai',
                          type: 'date'                 
                      },
                      tanggal_akhir_event: 
                      {
                          title: 'Tanggal Berakhir',
                          type: 'date'
                      },
                      jam_mulai_event: 
                      {
                          title: 'Jam Mulai'                     
                      },
                      jam_akhir_event: 
                      {
                          title: 'Jam Akhir',
                          list: false                     
                      },
                      tipe_event: 
                      {
                          title: 'Tipe'
                      },
                      pic_event: 
                      {
                          title: 'Gambar',
                          list: false                        
                      },
                      register_event: 
                      {
                          title: 'Link Event',
                          list: false                    
                      },
                      lihat:
                      {
                          width: '3%',
                          title: 'Edit',
                          display: function (data) 
                          {
                              return '<a href="<?php echo site_url() ?>admin/training/updateviewetraining/'+ data.record.id_event +'">Edit</a>';
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