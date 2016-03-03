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
        <a href="<?=site_url("admin/event/tambah")?>"><button type="button" class="btn btn-primary btn-flat">Add new record</button></a>
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
                       listAction: '<?=base_url()?>index.php/admin/event/listevent'
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
                          options: 'event/get_kota'                          
                      },
                      id_negara_event: 
                      {
                          title: 'Negara',
                          options: 'event/get_negara'                        
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
                          title: 'Tipe',
                          options: { '1': 'Confrence', '2': 'Event', '3': 'Course' }                          
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
                      Proses:
                      {
                          title: 'Proses Pasien',
                          display: function (data) 
                          {
                              return '<a href="<?php echo site_url() ?>/proses/prosespasien/'+ data.record.no_RM +'">Proses</a>'; 
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