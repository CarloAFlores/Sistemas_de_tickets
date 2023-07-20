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
        <div class="header__logo">
                <img src="../../src/img/logosinfondoblanco.png" alt="LOGO ECI©" class="header__logo--img">
            </div>

            <nav class="menu">
                
                <section class="menu__container">

            <h1 class="menu__logo">Sistema de Tickets</h1>


            <ul class="menu__links">
                <li class="menu__item">
                    <a href="#" class="menu__link">Principal</a>
                </li>
    
                <li class="menu__item menu__item--show">
                    <a href="#" class="menu__link">Mis Tickets <i class='bx bxs-chevron-down bx-md menu__arrow'></i> </a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Pendientes</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">En Proceso</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">En espera por falta de Recurso</a>
                        </li>
                        <!--<li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">No Procede</a>
                        </li>-->
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Terminados</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Cancelados</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Eliminados</a>
                        </li>
                    </ul>
                </li>
    
                <li class="menu__item">
                    <a href="#" class="menu__link">Estadisticas</a>
                </li>
                <li class="menu__item">
                    <a href="#" class="menu__link">Cerrar Sesión</a>
                </li>
    
            </ul>

            <div class="menu__hamburguer">
                <i class='bx bx-menu-alt-right bx-md' class="menu__img"></i> 
            </div>
        </section>

      
    </nav>
    <?php endif; ?>

    <?php echo $contenido; ?>


<!--Aca es donde aplicamos la funcion anteriormente declarada-->
    <?php if($auth): ?>
        <footer>
            <h3>Desarrollado BY ECI© 2023</h3>
        </footer>
    <?php  endif;?>
    
    <script src="../../src/js/main.js"></script>

</body>
</html>