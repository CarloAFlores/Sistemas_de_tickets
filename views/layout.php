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
    <link rel="stylesheet" href="../../src/css/layout_style.css">
    <link rel="stylesheet" href="../../node_modules/boxicons/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500&display=swap" rel="stylesheet">

</head>
<body>
    <?php if($auth): ?>
        <header>
            <div class="header__logo">
                <img src="../../src/img/logosinfondoblanco.png" alt="" class="header__logo--img">
            </div>

            <div class="header__menu nav">
                <div class="nav__menu">
                    <p>MENU</p>
                    <button class="nav__menu--btn">
                        <i class="bx bx-menu bx-sm"></i>
                    </button>
                </div>
                <h5 class="nav__titulo">SISTEMA DE TICKETS</h5>
            </div>

        </header>
    <?php endif; ?>

    <?php echo $contenido; ?>


<!--Aca es donde aplicamos la funcion anteriormente declarada-->
    <?php if($auth): ?>
        <footer>
            <h3>Desarrollado BY ECI© 2023</h3>
        </footer>
    <?php  endif;?>
    
</body>
</html>