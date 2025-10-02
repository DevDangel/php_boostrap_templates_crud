<?php include ("../templates/cabecera.php");?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de Libro
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="">
                <div class = "form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" id="txtID" name="txtID" placeholder="ID">
                </div>
                <br>
                <div class = "form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese el nombre del libro">
                </div>
                <br>
                <div class = "form-group">
                    <label for="fileImg">Imagen:</label>
                    <input type="file" class="form-control" id="fileImg" name="fileImg" placeholder="">
                </div>
                <br>
                <div class="btn-group" role="group" aria-label="">
                    <button type="button" class="btn btn-success" style="border-radius: 5px;">Agregar</button> &nbsp; &nbsp;
                    <button type="button" class="btn  btn-warning" style="border-radius: 5px;">Modificar</button> &nbsp; &nbsp;
                    <button type="button" class="btn btn-info" style="border-radius: 5px;">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    
</div>
<div class="col-md-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<?php include ("../templates/pie.php");?>