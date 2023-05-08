<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/v_report.css" type="text/css">
    <script src="https://kit.fontawesome.com/f3658a7584.js" crossorigin="anonymous"></script>
    <script src="css/report.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LOCUS - REPORTS</title>
</head>
<?php
    $titulo = $_GET['libro'];
    $id = $_GET['id'];
?>
<body style="background-color: #192E40;">
<section class="incio">
        <header>
                <a href="../../index.php"><article id="items"><img id="logo" src="../../IMG_INDEX/LOGO1.png"></article></a>
                <section class="menu">
                    <section class="panel-it">
                        <article id="items1"><a href="perfil.php"></a></article>
                        <article id="items"><a href="vistaLista.php"><i class="fas fa-arrow-circle-left"></i></a></article>
                    </section>
                </section>
        </header>
</section>
<div class="contenedor">
    <div class="contenedor1">
    <h2> Report of the book "<?php echo $titulo ?>" </h2>

        <form action="../controlador/ctrlReport.php?id=<?php echo $id?>" method="POST">
            <fieldset>
                <label> Report Title: </label>
                <input type="text" name="titu" id="titu" >
            </fieldset>
            <fieldset>
                <label> Description: </label>
                <textarea maxlength="450" id="descr" name="descr" ></textarea>
            </fieldset>

            <div class="inputBox2">
                <label>
                    <input type="submit" id="boton" onclick="return validar()" name="accion" value="Enviar" required>
                </label>
            </div>
        </form>
        <?php
        
        ?>

    </div>
</div>
<!-- <div class="lista">
    <a href="v_admin.php" id="repor">Listado de reportes</a>
</div> -->

</body>
</html>