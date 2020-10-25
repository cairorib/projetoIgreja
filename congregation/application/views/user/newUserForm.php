<div class='jumbotron'>
    <div class='container'>
       
            <?php
            echo form_open('Login/newUser');
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
                'class'=>'btn btn-primary btn-block'
            ));
            ?>
     </div>
</div>