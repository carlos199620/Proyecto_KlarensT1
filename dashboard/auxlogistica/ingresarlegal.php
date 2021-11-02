<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registrar T1</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="shortcut icon" href="icon/flutter.png" type="image/x-icon">
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de viajes</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <select class="form-control" id="destinos" name="destinos">
                                                        <option value="ninguna" selected>--</option> 
                                                        <option value="BARRANQUILLA">BARRANQUILLA</option>
                                                        <option value="CARTAGENA">CARTAGENA</option>
                                                        <option value="SANTA MARTA">SANTAMARTA</option>
                                                        <option value="MONTERIA">MONTERIA</option>
                                                        <option value="AGUACHICA">AGUACHICA</option>
                                                        <option value="MAICAO">MAICAO</option>
                                                        <option value="BUCARAMANGA">BUCARAMANGA</option>
                                                        <option value="RIOHACHA">RIOHACHA</option>
                                                        <option value="OCAÑA">OCAÑA</option>
                                                        <option value="MOMPOX">MOMPOX</option>
                                                        <option value="MAGANGUE">MAGANGUE</option>
                                                        <option value="SINCELEJO">SINCELEJO</option>
                                                        <option value="BANCO">BANCO</option>
                                                        <option value="PLATO">PLATO</option>
                                                        <option value="MINACOMPASS">MINACOMPASS</option>
                                                        <option value="MINASODEXO">MINASODEXO</option>
                                                        <option value="PDVAEROPUERTO">PDVAEROPUERTO</option>
                                                        <option value="PDVDELIKLARENS">PDVDELIKLARENS</option>
                                                        <option value="PDVPPALVALLEDUPAR">PDVPPALVALLEDUPAR</option>
                                                        <option value="PAE">PAE</option>
                                                    </select>

                                                </div>
                                                <div class="col-md-6">
                                                <?php 
                                                    // $unico = $_POST["VIAJEUNICO"];
                                                    // $x2 =$_POST["COMPARTIDOX2"];
                                                    // $x3 =$_POST["COMPARTIDOX3"];
                                                    // $x4 =$_POST["COMPARTIDOX4"];
                                                    // $x5 =$_POST["COMPARTIDOX5"];
                                                    // $x6 =$_POST["COMPARTIDOX6"];

                                                ?>
                                                    <select class="form-control" id="compartido" name="compartido">
                                                        <option value="ninguna" selected>--</option> 
                                                        <option value="VIAJEUNICO">VIAJE UNICO</option>
                                                        <option value="COMPARTIDOX2">COMPARTIDO X2</option>
                                                        <option value="COMPARTIDOX3">COMPARTIDO X3</option>
                                                        <option value="COMPARTIDOX4">COMPARTIDO X4</option>
                                                        <option value="COMPARTIDOX5">COMPARTIDO X5</option>
                                                        <option value="COMPARTIDOX6">COMPARTIDO X6</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="gastosalim" type="number" placeholder="Gastos" min=1 required/>
                                                        <label for="gastosalim">Gastos de Alimentacion</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="gastoshospedaje" type="number" placeholder="Gastos" min=1 required>
                                                        <label for="gastoshospedaje">Gastos de Hospedaje</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="gastostransporte" type="number" placeholder="Gastos" min=1 required>
                                                        <label for="gastostransporte">Gastos de Transporte</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="gastospeajes" type="number" placeholder="Gastos" min=1 required>
                                                        <label for="gastospeajes">Gastos de Peajes</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="gastosmantenimiento" type="number" placeholder="Gastos" min=1 required>
                                                        <label for="gastosmantenimiento">Gastos de Mantenimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="gastosservicios" type="number" placeholder="Gastos" min=1 required>
                                                        <label for="gastosservicios">Gastos de Servicios</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="otrosgastos" type="number" placeholder="Gastos" min=1 required>
                                                        <label for="otrosgastos">Otros Gastos</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="home.php">Guardar</a></div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><a class="btn btn-primary btn-block" href="home.php">Regresar</a></div>
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