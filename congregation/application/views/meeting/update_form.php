<div class="content-wrapper">
   

<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Meeting insert</h3>
              </div>
              <!-- /.card-header --> 
              <!-- form start -->
               <?php if($this->session->flashdata('success')): ?> 
                <?= $this->session->flashdata('success') ?>
               <?php  endif ?> 
                <div class="card-body">
                  <?php echo form_open('MeetingControl/update'); ?>
                  <?php  echo form_hidden('id', $dados['id']); ?>  
                
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">NOME</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='nome'  value="<?= $dados['title'] ?>"  placeholder='Informe o nome da reunião'/>  
                        <?= form_error('nome');?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">DESCRIÇÃO</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='descricao'  value="<?= $dados['description'] ?>"   placeholder='Informe uma descrição da Reunião'/>  
                        <?= form_error('descricao');?>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">DIA DA REUNIÃO</label>
                      <div class="col-sm-3">
                        <select class="form-control" name='dia'>
                            <option>DOMINGO</option>
                            <option>SEGUNDA-FEIRA</option>  
                            <option>TERÇA-FEIRA</option>  
                            <option>QUARTA-FEIRA</option>  
                            <option>QUINTA-FEIRA</option>  
                            <option>SEXTA-FEIRA</option>  
                            <option>SÁBADO</option>  
                          </select>                        
                        
                      </div>
                      &nbsp&nbsp&nbsp <label for="inputPassword3" class="col-sm-2 col-form-label">HORÁRIO</label>
                      <div class="col-sm-2">
                        <input class='form-control' name='horario'  type='time'/>  
                        <?= form_error('horario');?>
                      </div>
                      
                    </div>

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">ENDEREÇO</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='endereco'  value="<?= $dados['local'] ?>"  placeholder='Informe o endereço'/>  
                        <?= form_error('endereco');?>
                      </div>
                    </div>   

                      <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">COMPLEMENTO</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='complemento'  value="<?= $dados['complement'] ?>"  placeholder='Informe o complemento do endereço'/>  
                       </div>
                    </div>   

                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label"   >CEP</label>
                      <div class="col-sm-3">
                      <input class='form-control' name='cep'  type='text' placeholder='Informe um CEP'  value="<?= $dados['cep'] ?>" />                 
                         
                      </div>
                      &nbsp&nbsp&nbsp <label for="inputPassword3" class="col-sm-2 col-form-label">TEL</label>
                      <div class="col-sm-3">
                        <input class='form-control' name='telefone'  type='number'placeholder='Informe um telefone'  value="<?= $dados['tel'] ?>" />  
                         
                      </div>
                      
                    </div>
                    

                    <div class="form-group row"> 
                    <div class='col'>
                     <?php echo anchor('MeetingControl/Dashboard', 'Voltar', array('class'=>'btn btn-primary')); ?>
                    </div>
                    <div class='col-6'></div>
                    <div class= 'col'>
                    <button class='btn btn-success' type='submit'> ATUALIZAR </button>
                   </div>
                   <?php echo form_close();?>


                  </div>                                 
                  
               
                    

</div>

