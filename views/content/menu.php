
<div class="user-area dropdown float-right">
    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="user-avatar rounded-circle" src="./../images/logo3.png" alt="User Avatar">
    </a>

    <div class="user-menu dropdown-menu">
        <div>
        </div>
        <small class="bg"><?php echo $_SESSION["user"]["USUARIO"]; ?></small>
        <a class="nav-link" href="./usuario.php"><i class="fa fa- user"></i>Mi perfil</a>
       <a class="nav-link" href="#"><i class="fa fa- user"></i>Notificaciones <span class="count">13</span></a>
       <a class="nav-link" href="#"><i class="fa fa -cog"></i>Ajustes</a>
        <div>
            <form action="./../controllers/UsuarioController.php?opcion=Cerrar_Sesion" method="post">
                <button type="submit" class="btn btn-danger btn-sm">Cerrar Sesion</button>
            </form>
        </div>
    </div>
</div>