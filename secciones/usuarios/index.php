<?php
   include("../../plantillas/header.php");
?>

<br/>
<h3>Usuarios</h3>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary"
            href="crear.php" role="button">
            Agregar Usuario
        </a>
    </div>
    <div class="card-body">
      <div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre de usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Correo</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Tatiana Andrea Guzman</td>
                <td>*******</td>
                <td>tgz57031@gmail.com</td>
                <td>
                    <input name="btneditar" id="" class="btn btn-primary" type="button" value="editar">
                    <input name="btneliminar" id="" class="btn btn-primary" type="button" value="eliminar">
                
                </td>
            </tr>
        </tbody>
    </table>
</div>  
    </div>
    
</div>


<?php
    include("../../plantillas/footer.php");
?>