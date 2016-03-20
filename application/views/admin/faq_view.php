<link href="<?php echo base_url() ?>assets/admin/css/validationEngine.jquery.css" rel="stylesheet" type="text/css" />
 
<!-- Import Javascript files for validation engine (in Head section of HTML) -->
<script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/js/jquery.validationEngine-en.js"></script>


<div class="content-wrapper">
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel FAQ
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div id="PeopleTableContainer"></div>
      <script type="text/javascript">

          $(document).ready(function () {

              //Prepare jTable
              $('#PeopleTableContainer').jtable({
                  title: 'List FAQ',
                  paging: true,
                  pageSize: 10,
                  sorting: true,
                  defaultSorting: 'nomer ASC',
                  actions: 
                  {
                      listAction: '<?=base_url()?>index.php/admin/faq/listfaq',
                      updateAction: '<?=base_url()?>index.php/admin/faq/updatefaq',
                      deleteAction: '<?=base_url()?>index.php/admin/faq/hapusfaq',
                      createAction: '<?=base_url()?>index.php/admin/faq/createfaq'              
                  },
                  fields: 
                  {                   
                      id_faq: 
                      {
                          key: true,
                          create: false,
                          edit: false,
                          list: false
                      },
                      question: 
                      {
                          title: 'Question',
                          type: 'textarea'
                      },  
                      answer: 
                      {
                          title: 'Answer',
                          type: 'textarea',
                          list: false   
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