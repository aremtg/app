<?php
   include("../../plantillas/header.php");
?>

<br/>
<div class="card">
    <div class="card-header">
        Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="usuario" class="form-label">Nombre del usuario:</label>
              <input type="text"
                class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del usuario">
            </div>
            <div class="mb-3">
              <label for="contrasenia" class="form-label">Nombre del usuario:</label>
              <input type="email"
                class="form-control" name="" id="nombredelusuario" aria-describedby="helpId" placeholder="Nombre del usuario">
            </div>

            <button type="sumit" class="btn btn-success">Agregar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    
        </form>
    </div>
    
</div>


<?php
    include("../../plantillas/footer.php");
?>