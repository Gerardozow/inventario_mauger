<!-- Menu Compras -->
<li class="sidebar-header">CRM & Ventas</li>

<li class="sidebar-item <?= $page == "registro_clientes" ? "active" : ""; ?>">
    <a class="sidebar-link" href="./registro_clientes.php"> <i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Clientes</span> </a>
</li>

<!--<li class="sidebar-item <?= $separador == "CRM" ? "active" : ""; ?>">
    <a data-bs-target="#CRM_Menu" data-bs-toggle="collapse" class="sidebar-link <?= $separador == "CRM" ? "" : "collapsed"; ?>"><i class="align-middle" data-feather="shopping-cart"></i>Clientes</a>
    <ul id="CRM_Menu" class="sidebar-dropdown list-unstyled collapse <?= $separador == "CRM" ? "show" : ""; ?>">
        <li class="sidebar-item <?= $page == "registro_clientes" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./registro_clientes.php">Clientes</a>
        </li>
    </ul>
</li>-->

<!-- Fin Menu Compras -->