<?php
   include("../../plantillas/header.php");
?>
<br/>
crear empleados
<div class="card">
    <div class="card-header">
        Agregar datos del empleado
    </div>
    <!--  -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="" class="form-label">Primer nombre</label>
          <input type="text"
            class="form-control" name="primernombre" id="primernombre" aria-describedby="helpId" placeholder="Primer nombre">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Segundo nombre</label>
          <input type="text"
            class="form-control" name="segundonombre" id="segundonombre" aria-describedby="helpId" placeholder="Segundo nombre">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Primer apellido</label>
          <input type="text"
            class="form-control" name="primerapellido" id="primerapellido" aria-describedby="helpId" placeholder="Primer apellido">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Segundo apellido</label>
          <input type="text"
            class="form-control" name="segundoapellido" id="segundoapellido" aria-describedby="helpId" placeholder="Segundo apellido">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Foto</label>
          <input type="file"
            class="form-control" name="foto" id="foto" aria-describedby="helpId" placeholder="foto">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">CV(PDF)</label>
          <input type="file"
            class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="cv">
        </div>
    <div class="mb-3">
        <label for="idpuesto" class="form-label">Puesto:</label>
        <select class="form-select form-select-mb" name="idpuesto" id="idpuesto">
            <option selected>Select one</option>
            <option value="">New Delhi</option>
            <option value="">Istanbul</option>
            <option value="">Jakarta</option>
        </select>
    </div>
    <div class="mb-3">
      <label for="fechadeingreso" class="form-label">Fecha de ingreso</label>
      <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" placeholder="">
      
    </div>

    <button type="sumit" class="btn btn-success">Agregar</button>
    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
    </form>


</div>

<?php
    include("../../plantillas/footer.php");
?>