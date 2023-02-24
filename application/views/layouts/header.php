<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/header.css')?>">
    <title>Document</title>
</head>
<body>
    <header class="head">
        <h1> Portal <?php echo $permissao?></h1>
        <div>
            <a href="<?php echo base_url('index.php/form/criar')?>"><button class="btn1">Add</button></a>
            <a href=""><button class="btn1">Clean</button></a>
        </div>
    </header>
    
</body>
</html>