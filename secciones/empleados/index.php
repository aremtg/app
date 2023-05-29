<?php
   include("../../plantillas/header.php");
?>
<br/>
<h3>Empleados</h3>
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
                        <th scope="col">Nombre</th>
                        <th scope="col">foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">puesto</th>
                        <th scope="col">fecha de ingreso</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">Tatiana Andrea Guzman Galindo</td>
                        <td>tati.jpg</td>
                        <td>R1C3</td>
                        <td>aprendiz</td>
                        <td>13/04/2020</td>
                        <td>
                            <a name="" id="" class="btn btn-warning" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
                        </td>
                    </tr>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                        <td>R1C2</td>
                        <td>R1C2</td>
                        <td>
                            <a name="" id="" class="btn btn-warning" href="#" role="button">Carta</a>
                            <a name="" id="" class="btn btn-info" href="#" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="#" role="button">Eliminar</a>
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