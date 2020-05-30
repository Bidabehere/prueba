<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Sistema</a>
            </div>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php if (isset($home_menu)){echo "active";}?>">
                        <a href="home.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Inicio</a>
                    </li>
                    <li class="<?php if (isset($home_usuario)){echo "active";}?>">
                        <a href="usuarios.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Usuarios</a>
                    </li>
                    <li class="<?php if (isset($home_producto)){echo "active";}?>">
                        <a href="producto.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Productos</a>
                    </li>
                    <li class="<?php if (isset($home_guia)){echo "active";}?>">
                        <a href="guia.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></i> Guias</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>