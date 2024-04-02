<?php
$title_page = 'Clientes | CRM & Ventas';
//Menus Sidebar
$page = 'registro_clientes';
$separador = 'CRM';
$separador_page = 'registro_clientes';
require_once('includes/load.php');
if (!$session->isUserLoggedIn(true)) {
    redirect('index.php', false);
}


include_once('layouts/head.php');

?>



<body>
    <div class="wrapper">
        <?php include_once('layouts/sidebar.php'); ?>
        <div class="main">
            <?php include_once('layouts/navbar.php'); ?>
            <!-- Contenedor main -->
            <main class="content">
                <div class="container-fluid p-0">
                    <?php echo display_msg($msg); ?>
                    <div class="d-flex">
                        <h1 class="h3 mb-3"><strong>Productos</strong> </h1>
                        <div class="col-auto ms-auto text-end mt-n1">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#creation_productos">Nuevo Producto</button>
                        </div>
                    </div>


                </div>
            </main>

            <!-- Fin Contenedor main -->
            <?php include_once('layouts/footer.php'); ?>

        </div>
    </div>


    <?php include_once('layouts/scripts.php'); ?>
</body>

</html>