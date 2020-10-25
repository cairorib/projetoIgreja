<div class="content-wrapper">
   

<!-- Horizontal Form -->
<div class="card card-info">
               <div class="card-header">
                <h3 class="card-title">delete form Donate</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
                <div class="card-body">
                  <?php echo form_open('DonateControl/delete');
                         echo form_hidden('id', $dados['id']);   
                  
                  ?>
                  <center>ATENÇÂO: </br><b> AS SEGUINTES INFORMAÇÕES SERÃO EXCLUÍDAS</b></center>
                  <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Banco</label>
                      <div class="col-sm-10">
                       <?= $dados['banco'] ?> 
                        
                      </div>
                    </div>
                  
                  
               
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Conta</label>
                      <div class="col-sm-3">
                      <?= $dados['conta'] ?> 
                       
                      </div>
                      
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group row">                         
                          <?= $dados['tipo'] ?> 
                           
                       </div>
                    </div>
                    <div class="col-sm-3">
                    <?= $dados['agencia'] ?> 
                    
                    </div>
                        
                </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">IBAN</label>
                      <div class="col-sm-10">
                     <?= $dados['iban'] ?> 
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">SWIFT</label>
                      <div class="col-sm-10">
                        <?= $dados['swift'] ?> 
                        
                      </div>
                    </div>
                      
                    <div class="form-group row"> 
                    <div class='col'>
                     <?php echo anchor('DonateControl/Dashboard', 'Voltar', array('class'=>'btn btn-primary')); ?>
                    </div>
                    <div class='col-6'></div>
                    <div class= 'col'>
                    <button class='btn btn-danger' type='submit'> EXCLUIR </button>
                   </div>
                   <?php echo form_close();?>

                  


                </div>