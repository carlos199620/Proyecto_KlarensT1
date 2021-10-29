<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GESTION DE VEHICULOS</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Asignar Vehiculo</h3></div>
                                    <div class="card-body">
                                        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                                        <div class="form-floating mb-3">
                                                <!-- <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Tipo de Usuariuo</label> -->
                                                Seleccionar Placa
                                                <select class="form-control" id="placa" name="Users">
                                                    <option value="ninguna" selected>--</option>
                                                    <option value="TLW152">TLW152</option> 
                                                    <option value="TLW153">TLW153</option>
                                                    <option value="TLW154">TLW154</option>
                                                    <option value="SZA566">SZA566</option>
                                                    <option value="WRD552">WRD552</option>
                                                    <option value="UWS608">UWS608</option>
                                                    <option value="SZA078">SZA078</option>
                                                    <option value="TLU814">TLU814</option>
                                                    <option value="TLU815">TLU815</option>
                                                    <!-- <option value="consulviaticos">Consultor Viaticos</option> -->
                                                    <!-- <option value="admin vehiculos">Admin Vehiculos</option> -->
                                                  </select>
                                                  <label for="date"type="date"></label>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <br>
                                        <form>
                                        <div class="form-floating mb-3">
                                                <!-- <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Tipo de Usuariuo</label> -->
                                                Asignar Viaje
                                                <select class="form-control" id="rutas" name="ruta">
                                                    <option value="ninguna" selected>--</option>
                                                    <option value="RUTA1">RUTA1</option> 
                                                    <option value="RUTA2">RUTA2</option>
                                                    <option value="RUTA3">RUTA3</option> 
                                                    <option value="RUTA4">RUTA4</option>
                                                    <option value="RUTA5">RUTA5</option> 
                                                    <option value="RUTA6">RUTA6</option>
                                                    <!-- <option value="consulviaticos">Consultor Viaticos</option> -->
                                                    <!-- <option value="admin vehiculos">Admin Vehiculos</option> -->
                                                  </select>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <!-- <input class="form-control" id="inputEmail" type="text" placeholder="name@example.com" />
                                                <label for="inputEmail">Tipo de Usuariuo</label> -->
                                                Destino
                                                <select class="form-control" id="placa" name="destino">
                                                    <option value="ninguna" selected>--</option>
                                                    <option value="BARRANQUILLA">BARRANQUILLA</option> 
                                                    <option value="SANTAMARTA">SANTA MARTA</option>
                                                    <option value="CARTAGENA">CARTAGENA</option> 
                                                    <option value="SINCELEJO">SINCELEJO</option>
                                                    <option value="MONTERIA">MONTERIA</option> 
                                                    <option value="PAE LUCY">PAE LUCY</option>
                                                    <option value="PAEUTHEROICA">PAE UT HEROICA</option>
                                                    <!-- <option value="consulviaticos">Consultor Viaticos</option> -->
                                                    <!-- <option value="admin vehiculos">Admin Vehiculos</option> -->
                                                  </select>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="index.php">Asignar Vehiculo</a></div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-secondary btn-block" href="index.php">Regresar</a></div>
                                            </div>
                                            
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