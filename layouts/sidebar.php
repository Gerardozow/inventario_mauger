<?php
//definir los permisos de usuario
//obener el user level de tabla users
$user_level = find_by_sql('SELECT user_level FROM users WHERE id =' . (int)$_SESSION['user_id']);
$user_level = $user_level[0]['user_level'];
?>

<!-- Sidebar -->
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">MAUGER | ERP</span>
        </a>

        <ul class="sidebar-nav">
            <!-- Dashboard -->
            <li class="sidebar-header">Pages</li>

            <li class="sidebar-item <?= $page == "home" ? "active" : ""; ?>">
                <a class="sidebar-link" href="home.php"> <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span> </a>
            </li>
            <!-- Fin Dashboard -->

            <!--Productos & Stock -->
            <?php include_once('sidebar_menu/productos_menu.php') ?>


            <!-- CRM & Ventas -->
            <?php include_once('sidebar_menu/crm_menu.php') ?>

            <!-- Menu HR -->
            <?php include_once('sidebar_menu/hr_menu.php') ?>

            <!-- Fin Menu Principal -->
            <?php include_once('sidebar_menu/settings.php') ?>


        </ul>

    </div>
</nav>
<!-- Fin Sidebar -->