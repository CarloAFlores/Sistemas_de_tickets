<!--Mediante esta condicion podemos decir si el footer se vera o no -->
<?php 
$inicio = false;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Tickets</title>

</head>
<body>
    <header>
        <img src="" alt="logo_empresa">
    </header>

    <?php echo $contenido; ?>


<!--Aca es donde aplicamos la funcion anteriormente declarada-->
    <?php if($inicio): ?>
    <footer>
        <h1>FOOTER</h1>
    </footer>
    <?php  endif;?>
    
</body>
</html>