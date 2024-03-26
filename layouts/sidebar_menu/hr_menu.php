<!-- Menu HR -->
<li class="sidebar-header">HR</li>

<li class="sidebar-item <?= $separador_page == "HR" ? "active" : ""; ?>">
    <a data-bs-target="#HR_menu" data-bs-toggle="collapse" class="sidebar-link <?= $separador_page == "HR" ? "" : "collapsed"; ?>"><i class="align-middle" data-feather="users"></i>HR</a>
    <ul id="HR_menu" class="sidebar-dropdown list-unstyled collapse <?= $separador == "Usuarios" ? "show" : ""; ?>">
        <li class="sidebar-item <?= $page == "empleados" ? "active" : ""; ?>">
            <a class="sidebar-link" href="./empleados.php">Empleados</a>
        </li>
        <?php
        //mostrar solo si el usuario es administrador
        if ($user_level == 1) { ?>
            <li class="sidebar-item <?= $page == "Usuarios" ? "active" : ""; ?>">
                <a class="sidebar-link" href="./usuarios.php">Usuarios</a>
            </li>
        <?php } ?>
    </ul>
</li>