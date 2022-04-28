<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Agenda 1</title>
</head>

<body>
    
    <div class="container">
        <div class="row">
            <h1>Agenda de contactos</h1>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h2>Registro de Contacto</h2>
                    <div class="card-body">
                    <form action="./crud/insertarlista.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre">
                                
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="Apellido" name="Apellido">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">email</label>
                                <input type="email" class="form-control" id="Email" name="Email">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="Telefono" name="Telefono">
                            </div>
                            <div class="mb-3">
                            <label for="exampleNombre" class="form-label">Movil</label>
                                <input type="text" class="form-control" id="Movil" name="Movil">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="Activo" name="Activo">
                                <label class="form-check-label" for="exampleCheck1">Activo</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>

                    </div>
                </div>
                





            </div>
            <div class="col-md-6">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">APellido</th>
                            <th scope="col">Movil</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once 'crud/listaContactos.php';
                        foreach ($result as $datos) {
                            echo '
                                <tr>
                                <td>' . $datos[0] . '</td>
                                <td>' . $datos[1] . '</td>
                                <td>' . $datos[2] . '</td>
                                <td>' . $datos[5] . '</td>
                                <td><button type="button" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></button></td>
                                <td><button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></button></td>
                                
                                
                                </tr> 
                                
                                
                                
                                
                                ';
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>