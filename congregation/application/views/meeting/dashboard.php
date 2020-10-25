

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
       

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <h1>Reuniões</h1>
          </div>
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
           <b><?php if($this->session->flashdata('success')): ?>
            <?= $this->session->flashdata('success') ?>
            <?php  endif ?>
            </b>

            <b>
            <?php if($this->session->flashdata('danger')): ?>
            <?= $this->session->flashdata('danger') ?>
            <?php  endif ?>
            </b>
    <!-- Main content -->
    <section class="content">
      <div class="row">
         
             
            <div class="card-header">
 
              <?= anchor('MeetingControl/insertForm','Adicionar Reunião', array('class'=>'btn btn-primary') );?>
            </div>
             
          
 
            
            <!-- /.card-header -->
            <div class="card-body">
 
              <table id="example1" class="table table-bordered table-striped">
                 
                <thead>
                <tr>
                  <th>ID</th>
                  <th>NOME</th>
                  <th>DESCRIÇÃO</th>
                  <th>DIA</th>
                  <th>HORÁRIO</th>
                  <th>LOCAL</th>
                  <th>COMPLEMENTO</th>
                  <th>CEP</th>
                  <th>TEL</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php foreach($dados as $dado): ?>
                <tr>
                  <td><?= $dado['id']?></td>
                  <td><b><?= $dado['title']?></b></td>
                  <td><i><?= $dado['description']?></i></td>
                  <td><?= $dado['day']?></td>
                  <td><?= $dado['hour']?></td>
                  <td><?= $dado['local']?></td>
                  <td><?= $dado['complement']?></td>
                  <td><?= $dado['cep']?></td>
                  <td><?= $dado['tel']?></td>
                   <td>
                  <?php 
                      /* update */
                      echo form_open('MeetingControl/updateForm');
                      echo form_hidden('dados',$dado);
                      echo form_button(array(
                              'type'=>'submit',
                              'content'=>'<i class="far fa-edit"></i>',
                              'class'=>'btn btn-block btn-outline-success btn-sm',
                            ));
                      echo form_close(); 
                            ?><?php
                      /* delete */
                      echo form_open('MeetingControl/deleteForm'); 
                      echo form_hidden('dados',$dado);
                      echo form_button(array(
                       
                              'type'=>'submit',
                              'content'=>'<i class="fas fa-trash-alt"></i>',
                              'class'=>'btn btn-block btn-outline-danger btn-sm',
                            ));
                      echo form_close(); 
                  ?>
 
                   
                </tr>
                <?php endforeach ?>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
 
 $('#example1').DataTable({
   "paging": true,
   "lengthChange": true,
   "searching": true,
   "ordering": true,
   "info": true,
   "autoWidth": false,
   "responsive": true,
   "language": {
   "Show": "mostrar",
   'search':'Pesquisar',
   "emptyTable": "Sem dados disponíveis",
   "info": " ",
   "infoEmpty": "Mostrando de 0 até 0 de 0 registro ",
   " infoFiltered ":" (filtrado de MAX registros no total) ",
   " infoPostFix ":" ",
   "milhares": ",",
   "paging ": {
   "Previous":" Primeiro ",
   "last ":" Último ",
   "Next": "Seguinte",
   "Previous": "Anterior"
   },
   },

   
 });
});
    
   
</script>
</body>
</html>
