<link href="<?php echo base_url() ?>assets/admin/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
 
<!-- Import Javascript files for validation engine (in Head section of HTML) -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine-en.js"></script>


<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tabel Kontak
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div id="PeopleTableContainer"></div>
      <script type="text/javascript">

          $(document).ready(function () {

              //Prepare jTable
              $('#PeopleTableContainer').jtable({
                  title: 'Tabel Kontak',
                  paging: true,
                  pageSize: 10,
                  sorting: true,
                  defaultSorting: 'nomer ASC',
                  actions: 
                  {
                      listAction: '<?=base_url()?>index.php/admin/kontak/listkontak',
                      updateAction: '<?=base_url()?>index.php/admin/kontak/updatekontak',
                      deleteAction: '<?=base_url()?>index.php/admin/kontak/hapuskontak',
                      createAction: '<?=base_url()?>index.php/admin/kontak/createkontak'              
                  },
                  fields: 
                  {                   
                      id_contact: 
                      {
                          key: true,
                          create: false,
                          edit: false,
                          list: false
                      },
                      nama_contact: 
                      {
                          title: 'Nama'
                      },  
                      telp_contact: 
                      {
                          title: 'Telp'   
                      },  
                      email_contact: 
                      {
                          title: 'Email'   
                      }
                      // },  
                      // type_contact: 
                      // {
                      //     title: 'Answer'   
                      // }
                  }
              });

              //Load person list from server
              $('#PeopleTableContainer').jtable('load');
          });

      </script>
      
    </section><!-- /.content -->
  </div><!-- /.container -->
</div><!-- /.content-wrapper -->