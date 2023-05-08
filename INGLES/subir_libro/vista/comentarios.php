<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <tr>
            <td class="titulos">COMENTARIOS</td>
        </tr>
             
       <?php
        require_once "../modelo/daoComentario.php";
        $dao = new DaoComentario();
        $comentarios = $dao->comentarios();

        ?><div class="caja-comen"><?php
            foreach ($comentarios as $comentario){
                echo "<br><tr><td>".$comentario['comentario']."</td></tr>"; 
            }
        ?></div>

        
    </body>
</html>
