<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets\css\home.css')?>">
    <title>Document</title>
</head>
<body>
    <section class="window">
        <div class="img_w">     
            <img src="https://img.freepik.com/vetores-premium/linhas-gradientes-coloridas-abstratas-com-luz-azul-e-rosa-sobre-fundo-roxo_518299-100.jpg" alt="">
        </div>
        <div class="form_w">
            <h1>Aba de redirecionamento</h1>
            <h3>Selecione seu nível na empresa<br> para acessar seus avisos!</h3>
        <ul>
           <li><a href="<?php echo base_url('index.php/pagina/avisos/0')?>"><button class="b1">Geral</button></a></li>
           <li><a href="<?php echo base_url('index.php/pagina/avisos/1')?>"><button class="b2">Funcionário</button></a></li>
           <li><a href="<?php echo base_url('index.php/pagina/avisos/2')?>"><button class="b3">Diretoria</button></a></li>
        </ul>    
            <footer>&copy ProTech</footer>
        </div>

    </section>
</body>
</html>