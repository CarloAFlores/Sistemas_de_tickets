<!--Mediante esta condicion podemos decir si el footer se vera o no -->
<?php 
$auth = $_SESSION['login'];
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Tickets</title>

</head>
<body>
    <?php if($auth): ?>
        <header>
            <img src="" alt="">
            <a href="logout">Cerrar session</a>
        </header>
    <?php endif; ?>

    <?php echo $contenido; ?>


<!--Aca es donde aplicamos la funcion anteriormente declarada-->
    <?php if($auth): ?>
        <footer>
            <h1>FOOTER</h1>
        </footer>
    <?php  endif;?>
    
</body>
</html>