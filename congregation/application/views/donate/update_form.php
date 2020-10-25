<div class="content-wrapper">
   

<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Update form Donate</h3>
              </div>
              <!-- /.card-header --> 
              <!-- form start -->
               
               <?php if($this->session->flashdata('success')): ?> 
                <?= $this->session->flashdata('success') ?>
               <?php  endif ?> 
                <div class="card-body">
                    <?php echo form_open('DonateControl/update'); ?> 
                    <?php  echo form_hidden('id', $dados['id']); ?>                   
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Banco</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='banco' value="<?= $dados['banco'] ?>"   placeholder='Informe o nome do banco'/>  
                        <?= form_error('banco');?>
                      </div>
                    </div>
                  
                  
               
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Conta</label>
                      <div class="col-sm-3">
                        <input type="text" name='conta' class="form-control"  value="<?= $dados['conta'] ?>"    placeholder="Informe a conta">
                        <?= form_error('conta');?>
                      </div>
                      
                    <div class="col-sm-3">
                      <!-- select -->
                      <div class="form-group row">                         
                        <select class="form-control" name='tipo' value="<?= $dados['tipo'] ?>" >
                           <option>CONTA CORRENTE</option>
                          <option>POUPANÇA</option>  
                        </select>
                       </div>
                    </div>
                    <div class="col-sm-3">
                    <input type="text" name='agencia' class="form-control"  value="<?= $dados['agencia'] ?>"    placeholder="AGÊNCIA">
                    <?= form_error('agencia');?>
                    </div>
                        
                </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">IBAN</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='iban'  value="<?= $dados['iban'] ?>"   placeholder='Informe o IBAN'/>  
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">SWIFT</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='swift' value="<?= $dados['swift'] ?>"    placeholder='Informe o SWIFT'/>  
                        
                      </div>
                    </div>
                      
                    <div class="form-group row"> 
                    <div class='col'>
                     <?php echo anchor('DonateControl/Dashboard', 'Voltar', array('class'=>'btn btn-primary')); ?>
                    </div>
                    <div class='col-6'></div>
                    <div class= 'col'>
                    <button class='btn btn-success' type='submit'> Enviar </button>
                   </div>
                   <?php echo form_close();?>

                   
                  </div>


                </div>