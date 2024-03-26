<?php
$title_page = 'Materiales | Compras';
//Menus Sidebar
$page = 'productos';
$separador = 'productos';
$separador_page = 'productos';
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

                    <!-- Tabla de Materiales -->
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Lista de Productos</h5>
                                <div class="" id="botones"></div>
                            </div>
                        </div>
                        <div class="table px-3">
                            <table class="table mb-0 display table-striped" style="width:100%" id="Materiales">
                                <thead>
                                    <tr>
                                        <th class="text-center">°</th>
                                        <th class="text-center">SKU</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center">Costo (mxn)</th>
                                        <th class="text-center">UMB</th>
                                        <th class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $Productos = find_by_sql('SELECT p.*, u.Abreviatura FROM productos as p, unidadesmedida as u WHERE UnidadMedidaID = ID_UnidadMedida');
                                    foreach ($Productos as $Producto) :
                                    ?>
                                        <tr>
                                            <td class="text-center"><?php echo count_id(); ?></td>
                                            <td class="text-center"><?php echo remove_junk($Producto['Codigo']); ?></td>
                                            <td class="text-center"><?php echo remove_junk($Producto['Nombre']); ?></td>
                                            <td class="text-center">$ <?php echo remove_junk($Producto['PrecioCompra']); ?></td>
                                            <td class="text-center"><?php echo strtoupper(remove_junk($Producto['Abreviatura'])); ?></td>

                                            <td class="text-center" class="text-center">
                                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit_material" data-id="<?php echo $Producto['ID_Producto']; ?>"> <i class="aling-middle" data-feather="edit"></i></button>
                                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete_material" data-id="<?php echo $Producto['ID_Producto']; ?>"> <i class="aling-middle" data-feather="trash"></i></button>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </main>

            <!-- Fin Contenedor main -->
            <?php include_once('layouts/footer.php'); ?>

        </div>
    </div>


    <?php include_once('layouts/scripts.php'); ?>


    <!-- Datatables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/sc-2.3.0/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#Materiales').DataTable({
                paging: true,
                pageLength: 25,
                scrollCollapse: true,
                scrollY: '50vh',
                buttons: {
                    buttons: [{
                            extend: 'copy',
                            text: 'Copiar',
                            className: 'btn btn-primary btn-sm'
                        },
                        {
                            extend: 'excel',
                            text: 'Excel',
                            className: 'btn btn-success btn-sm'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            className: 'btn btn-danger btn-sm'
                        },

                    ]
                },
                language: {
                    Search: "Buscar:",
                    lengthMenu: "Mostrar _MENU_ registros por página",
                    zeroRecords: "No se encontraron resultados en su búsqueda",
                    info: "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
                    infoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
                    infoFiltered: "(filtrado de un total de _MAX_ registros)",
                    sSearch: "Buscar:",
                    oPaginate: {
                        sFirst: "Primero",
                        sLast: "Último",
                        sNext: "Siguiente",
                        sPrevious: "Anterior",
                    },

                },
            });

            table.buttons().container().appendTo('#botones');
        });
    </script>
</body>

</html>