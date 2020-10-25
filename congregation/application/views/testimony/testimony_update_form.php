<div class="content-wrapper">
   

<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Testemunho Update2</h3>
              </div>
              <!-- /.card-header --> 
              <!-- form start -->
               <?php if($this->session->flashdata('success')): ?> 
                <?= $this->session->flashdata('success') ?>
               <?php  endif ?> 
                <div class="card-body">
                    <?php echo form_open('testimonyControl/update'); ?> 
                    <?php  echo form_hidden('id', $dados['id']); ?>                   
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Título</label>
                      <div class="col-sm-10">
                        <input type="text" name='titulo' class="form-control" id="titulo"  value="<?= $dados['title'] ?>"   placeholder="Título do testemunho">
                        <?= form_error('titulo');?>
                      </div>
                                      
                      </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Testemunho</label>
                      <div class="col-sm-10">
                        <input class='form-control' name='descricao' value="<?= $dados['description'] ?>"  placeholder='Descrição do testemunho'/>  
                        <?= form_error('descricao');?>
                      </div>
                    </div>
                      
                    <div class="form-group row"> 
                    <div class='col'>
                     <?php echo anchor('testimonyControl/testimonyDashboard', 'Voltar', array('class'=>'btn btn-primary')); ?>
                    </div>
                    <div class='col-6'></div>
                    <div class= 'col'>
                    <button class='btn btn-success' type='submit'> Enviar </button>
                   </div>
                   <?php echo form_close();?>


                  </div>


                </div>