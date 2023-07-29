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
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@200;300;400;500;700&display=swap" rel="stylesheet">


</head>
<body>
    <?php if($auth): ?>
    <header>
        <div class="header__logo">
                <img src="../../src/img/logosinfondoblanco.png" alt="LOGO ECI©" class="header__logo--img">

                <h1 class="saludito">
                    Bienvenido <span>Jennifer Flores</span>
                </h1>
        </div>

        <nav class="menu">
                
            <section class="menu__container">

        <h1 class="menu__logo">Sistema de Tickets</h1>


            <ul class="menu__links">
                <li class="menu__item">
                    <a href="inicio" class="menu__link">Principal</a>
                </li>
    
                <li class="menu__item menu__item--show">
                    <a href="#" class="menu__link">Mis Tickets <i class='bx bxs-chevron-down bx-md menu__arrow'></i> </a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="pendientes" class="menu__link menu__link--inside">Pendientes</a>
                        </li>
                        <li class="menu__inside">
                            <a href="en_proceso" class="menu__link menu__link--inside">En Proceso</a>
                        </li>
                        <li class="menu__inside">
                            <a href="falta_recursos" class="menu__link menu__link--inside">En espera por falta de Recurso</a>
                        </li>
                        <!--<li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">No Procede</a>
                        </li>-->
                        <li class="menu__inside">
                            <a href="terminados" class="menu__link menu__link--inside">Terminados</a>
                        </li>
                        <li class="menu__inside">
                            <a href="cancelados" class="menu__link menu__link--inside">Cancelados</a>
                        </li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Eliminados</a>
                        </li>
                    </ul>
                </li>
    
                <li class="menu__item">
                    <a href="estadisticas" class="menu__link">Estadisticas</a>
                </li>
                <li class="menu__item">
                    <a href="logout" class="menu__link">Cerrar Sesión</a>
                </li>
    
            </ul>

            <div class="menu__hamburguer">
                <i class='bx bx-menu-alt-right bx-md' class="menu__img"></i> 
            </div>
        </section>
    </header>

      
    </nav>
    <?php endif; ?>

    <?php echo $contenido; ?>


<!--Aca es donde aplicamos la funcion anteriormente declarada-->
    <?php if($auth): ?>
        <footer class="pie">
            <h3 class="pie_h3">Developers LCC© 2023</h3>
        </footer>
    <?php  endif;?>
    
    <script src="../../src/js/main.js"></script>

</body>
</html>