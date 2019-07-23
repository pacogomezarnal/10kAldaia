<?php
require_once __DIR__.'/../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="es">
    <?php
            include __DIR__.'/../assets/head.php';
    ?> 
<body>
    <?php
        include __DIR__.'/../assets/menu.php';
    ?>
    <div class="content pagina">
        <form action="registro.php" method="post">
        <div class="row">
            <div class="col"></div>
            <div class="col-5">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Introduce tu email">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" laceholder="Introduce tu nombre">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" laceholder="Introduce tus apellidos">
                </div>
                <div class="form-group">
                    <label for="apellidos">Edad</label>
                    <input type="text" class="form-control" name="edad" id="edad" laceholder="Introduce tu edad">
                </div>

            </div>
            <div class="col-5">
                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select class="form-control" name="sexo" id="sexo">
                    <option>Hombre</option>
                    <option>Mujer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="apellidos">Club</label>
                    <input type="text" class="form-control" name="club" id="club" laceholder="Introduce tu club">
                </div>
                <div class="form-group">
                    <label for="pass1">Contraseña</label>
                    <input type="password" class="form-control" name="pass1" id="pass1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="pass2">Repite Contraseña</label>
                    <input type="password" class="form-control" name="pass2" id="pass2" placeholder="Password">
                </div>        
                <input type="hidden" name="action" value="registrar">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col"></div>
        </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>