<div class="content-wrapper">
   

<!-- Horizontal Form -->
<div class="card card-info">
               <div class="card-header">
                <h3 class="card-title">delete form USER</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
                <div class="card-body">
                  <?php echo form_open('UserControl/delete');
                         echo form_hidden('id', $dados['id']);   
                  
                  ?>
                  <center>ATENÇÂO: </br><b> AS SEGUINTES INFORMAÇÕES SERÃO EXCLUÍDAS</b></center>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">NOME</label>
                      <div class="col-sm-10">
                        <?= $dados['name']; ?>
                       </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">SOBRENOME</label>
                      <div class="col-sm-10">
                      <?= $dados['surname']; ?>
                       </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">EMAIL</label>
                      <div class="col-sm-10">
                      <?= $dados['email']; ?>
                      </div>
                    </div>
                  
               
                    <div class="form-group row"> 
                    <div class='col'>
                     <?php echo anchor('UserControl/Dashboard', 'Voltar', array('class'=>'btn btn-primary')); ?>
                    </div>
                    <div class='col-6'></div>
                    <div class= 'col'>
                    <button class='btn btn-danger' type='submit'> EXCLUIR </button>
                   </div>
                   <?php echo form_close();?>

                  


                </div>