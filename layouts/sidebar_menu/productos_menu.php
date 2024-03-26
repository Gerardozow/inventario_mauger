<li class="sidebar-header">Productos & Stock</li>

<li class="sidebar-item <?= $separador_page == "productos" ? "active" : ""; ?>">
    <a data-bs-target="#Productos_menu" data-bs-toggle="collapse" class="sidebar-link <?= $separador_page == "productos" ? "" : "collapsed"; ?>"><i class="align-middle" data-feather="box"></i>Productos</a>
    <ul id="Productos_menu" class="sidebar-dropdown list-unstyled collapse <?= $separador == "productos" ? "show" : ""; ?>">
        <li class="sidebar-item <?= $page == "productos" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./productos.php">Productos</a>
        </li>
        <li class="sidebar-item <?= $page == "gestion_stock" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./gestion_stock.php">Gestion de Stock</a>
        </li>
    </ul>
</li>