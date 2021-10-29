<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Busqueda o Eliminacion de Vehiculos</h3></div>
                                    <div class="card-body">
                                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Buscar Placa" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>PLACA</th>
                                                    <th>MARCA DEL VEHICULO</th>
                                                    <th>CAPACIDAD EN TONELADAS</th>
                                                    <th>CONDUCTOR ASIGNADO</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>AAA111</td>
                                                    <td>HYUNDAI</td>
                                                    <td>6000</td>
                                                    <td>CONDUCTOR A</td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>AAA111</td>
                                                    <td>HYUNDAI</td>
                                                    <td>6000</td>
                                                    <td>CONDUCTOR B</td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>AAA111</td>
                                                    <td>HYUNDAI</td>
                                                    <td>6000</td>
                                                    <td>CONDUCTOR C</td>                                                    
                                                </tr>
                                                <tr>
                                                    <td>AAA111</td>
                                                    <td>HYUNDAI</td>
                                                    <td>6000</td>
                                                    <td>CONDUCTOR D</td>                                                    
                                                </tr>
                                                    </tbody>
                                                    <hr>
                                        </table>
                                        <hr>
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" required>
                                                        <label for="inputFirstName">Marca del Vehiculo </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" required>
                                                        <label for="inputLastName">Capacidad del Vehiculo</label>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-danger btn-block" href="index.php">Eliminar</a></div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-secondary btn-block" href="index.php">Regresar</a></div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="logint1.html">ya tienes una cuenta? Ingresa aqui</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Carlos </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>