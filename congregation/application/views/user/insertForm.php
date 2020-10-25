<div class="content-wrapper">
   

<!-- Horizontal Form -->
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Quem somos insert</h3>
              </div>
              <!-- /.card-header --> 
              <!-- form start -->
               <?php if($this->session->flashdata('success')): ?> 
                <?= $this->session->flashdata('success') ?>
               <?php  endif ?> 
                <div class="card-body">
                   <?php
                        echo form_open('UserControl/insert');
                        echo form_label('Nome', 'nome');
                        echo form_input(array(
                            'name'=>'nome',
                            'id'=>'nome',
                            'class'=>'form-control',
                            'placeholder'=>'Insira seu nome',
                            'value'=>set_value('nome',''),
                        ));
                        echo form_error('nome'); 

                        echo form_label('Sobrenome', 'sobrenome');
                        echo form_input(array(
                            'name'=>'sobrenome',
                            'id'=>'sobrenome',
                            'class'=>'form-control',
                            'placeholder'=>'Insira seu sobrenome',
                            'value'=>set_value('sobrenome',''),
                        ));
                        echo form_error('sobrenome');
                        echo form_label('Email', 'email');
                        echo form_input(array(
                            'name'=>'email',
                            'id'=>'email',
                            'class'=>'form-control',
                            'placeholder'=>'Informe um Email',
                            'value'=>set_value('email',''),
                        ));
                        echo form_error('email');
                        echo form_label('Senha', 'senha');
                        echo form_input(array(
                            'name'=>'senha',
                            'id'=>'senha',
                            'class'=>'form-control',
                            'placeholder'=>'Informe uma senha',
                            'type'=>'password',
                            'value'=>set_value('senha',''),
                        ));
                        echo form_error('senha');
                        echo '<br>';
                        echo form_button(array(
                            'type'=>'submit',
                            'content'=>'Cadastrar',
                            'class'=>'btn btn-primary'
                        ));
                        ?>
                      
                    <br><br>
                    <div class='col'>
                     <?php echo anchor('userControl/Dashboard', 'Voltar', array('class'=>'btn btn-primary')); ?>
                    </div>
                     
                    


                  </div>


                </div>