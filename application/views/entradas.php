<?php 
$this->load->view('layouts/header');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets\css\entrada.css')?>">
    <title>Document</title>
</head>
<body>
  <?php
    if($avisos != TRUE):
      echo '<h1>Não há notícias</h1>';

    else:
    foreach($avisos as $aviso):
      ?>

<table>
<tr>
    <td><a href=""><button class="btn"></button></a><?php echo $permissao?></td>
    <td><?php
      echo $aviso->tipo_aviso;
        if($aviso->tipo_aviso == 0):
          $aviso->tipo_aviso = 'duvidas'
            if($aviso->tipo_aviso == 1):
              $aviso->tipo_aviso = 'noticias'
            else:
              if($aviso->tipo_aviso == 2):
                $aviso->tipo_aviso = 'avisos'

                else:
                  $aviso->tipo_aviso = 'urgente';
                endif;
            endif;
        endif;
    ?> </td>
    <td><?php 
      echo $aviso->title;
    ?> </td>
    <td><?php echo $aviso->date;
     ?></td>
     
</tr>
</table>
      <?php endforeach;
      endif;
       ?>
</body>
</html>


<?php
$this->load->view('layouts/footer');
?>