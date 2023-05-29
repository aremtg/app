<?php
   include("../../plantillas/header.php");
?>
<br/>
<h3>Puestos</h3>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary"
            href="crear.php" role="button">
            Agregar
        </a>
    </div>
    <div class="card-body">
      <div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre del puesto</th>
                <th scope="col">acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">1</td>
                <td>Programador</td>
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