<div class="content-wrapper">
   

<!-- Horizontal Form -->
<div class="card card-info">
               <div class="card-header">
                <h3 class="card-title">delete form Meeting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               
                <div class="card-body">
                  <?php echo form_open('MeetingControl/delete');
                         echo form_hidden('id', $dados['id']);   
                  
                  ?>
                  <center>ATENÇÂO: </br><b> AS SEGUINTES INFORMAÇÕES SERÃO EXCLUÍDAS</b></center>
                  <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">NOME</label>
                      <div class="col-sm-10">
                         <?= $dados['title'] ?>  
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">DESCRIÇÃO</label>
                      <div class="col-sm-10">
                        <?= $dados['description'] ?> 
                       </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">DIA DA REUNIÃO</label>
                      <div class="col-sm-3">
                      <?= $dados['day'] ?> 
                        
                      </div>
                      &nbsp&nbsp&nbsp <label for="inputPassword3" class="col-sm-2 col-form-label">HORÁRIO</label>
                      <div class="col-sm-2">
                      <?= $dados['hour'] ?> 
                       </div>
                      
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">ENDEREÇO</label>
                      <div class="col-sm-10">
                       <?= $dados['local'] ?>  
                       
                      </div>
                    </div>   

                      <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">COMPLEMENTO</label>
                      <div class="col-sm-10">
                       <?= $dados['complement'] ?>   
                       </div>
                    </div>   

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label"   >CEP</label>
                      <div class="col-sm-3">
                       <?= $dados['cep'] ?>              
                         
                      </div>
                      &nbsp&nbsp&nbsp <label for="inputPassword3" class="col-sm-2 col-form-label">TEL</label>
                      <div class="col-sm-3">
                    <?= $dados['tel'] ?> 
                         
                      </div>
                      
                    </div>
                    

                    <div class="form-group row"> 
                    <div class='col'>
                     <?php echo anchor('MeetingControl/Dashboard', 'Voltar', array('class'=>'btn btn-primary')); ?>
                    </div>
                    <div class='col-6'></div>
                    <div class= 'col'>
                    <button class='btn btn-danger' type='submit'> EXCLUIR </button>
                   </div>
                   <?php echo form_close();?>

                  


                </div>