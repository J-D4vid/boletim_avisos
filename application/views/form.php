<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets\css\form.css')?>">
    <title>Document</title>
</head>
<body>
    <div class="img_form">
        <div class="form">
            <h1>Criação de aviso</h1>
            <?php    
                    echo form_open_multipart();
                    echo form_input(array(
                        'name' => 'title',
                        'minlength' => '10',
                        'maxlength' => '30',
                        'placeholder' => 'título',
                        'required' => TRUE
                    ));
            ?>
            <br>
            <?php        
                    echo form_dropdown('nivel_acesso', array('Geral','Funcionario', 'Diretoria'));
                    echo form_dropdown('tipo_aviso', array('Duvidas','noticias', 'atividades', 'urgente'));
            ?>
            <br>
            <?php
                    echo form_textarea('text',);  
            ?>
            <br>
            <?php
                    echo form_button(
                        array("class" => 'btn',
                        "type" => 'submit',
                        "content" => '->')
                    );
                    echo form_close();
            ?>
        </div>
    </div>
</body>
</html>