<!-- Menu Compras -->
<li class="sidebar-header">Materiales</li>

<li class="sidebar-item <?= $separador == "Compras" ? "active" : ""; ?>">
    <a data-bs-target="#Compras_Menu" data-bs-toggle="collapse" class="sidebar-link <?= $separador == "Compras" ? "" : "collapsed"; ?>"><i class="align-middle" data-feather="dollar-sign"></i>Compras</a>
    <ul id="Compras_Menu" class="sidebar-dropdown list-unstyled collapse <?= $separador == "Compras" ? "show" : ""; ?>">
        <li class="sidebar-item <?= $page == "Dashboard_compras" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./compras.php">General</a>
        </li>
        <li class="sidebar-item <?= $page == "Proveedores" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./proveedores.php">Proveedores</a>
        </li>
        <li class="sidebar-item <?= $page == "OrdenesCompra" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./ordenes_compra.php">Ordenes de Compra</a>
        </li>
        <li class="sidebar-item <?= $page == "Materiales" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./materiales.php">Materiales</a>
        </li>
    </ul>
</li>

<!-- Fin Menu Compras -->