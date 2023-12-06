<?php include("include/conexion.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VetMay</title>

    <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    <style>
        .cantidad{
            width: 3em;
        }
    </style>

</head>
<body>
<?php
include('include/menu.php');
?>
<!--INICIO DE CONTENIDO-->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid"> <!--conteiner solo se usa el 80% de la pantalla conteiner-fluid ocupa todo-->
            <div class="row"><!--row ayuda a ser responsive pero en bootstrap-->
                <div class="col-12">
                    <h4 style="color: #485b3c;">REGISTRAR NUEVA VENTA</h4>                    
                    <div class="card">
                        <div class="card-body">
                           <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                            <form action="operaciones/registrarVentas.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">DNI:</label>
                                    <input type="number" name="dni"class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="dni cliente">
                                    <button class="btn btn-outline-success col-lg-2 col-md-2 col-sm-4">Buscar</button>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">APELLIDOS Y NOMBRES:</label>
                                    <input type="text" name="apellidos_nombres"class="form-control col-lg-8 col-md-8 col-sm-12" readonly>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">USUARIO:</label>
                                    <select name="usuario" id="usuario" class="form-control col-lg-8 col-md-8 col-sm-12">
                                        <option value="0"></option>
                                        <option value="1">usuario1</option>
                                        <option value="2">usuario2</option>
                                        <option value="3">usuario3</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">PRODUCTO:</label>
                                    <input type="number" name="dni"class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="còdigo producto">
                                    <button class="btn btn-outline-success col-lg-2 col-md-2 col-sm-4">Buscar</button>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-md-4 col-sm-12">FECHA Y HORA:</label>
                                    <label for="" class="form-control col-lg-8 col-md-8 col-sm-12"> <?php date_default_timezone_set("America/Lima"); echo date("d-m-Y h:i:s"); ?> </label>
                                </div>
                            </form>
                            </div>
                            <!-- inicio lado derecho-->
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <table class="table table-bordered md-0">
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-center" style="background-color: #a9cf96; color:black">PRODUCTOS</th>
                                        </tr>
                                        <tr>
                                            <th width="5%">Nro</th>
                                            <th width="60%">Descripcion</th>
                                            <th width="10%">Cant.</th>
                                            <th width="10%">P.unit.</th>
                                            <th width="10%">Importe</th>
                                            <th width="5%"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="background-color: #cfe0c6; color:black;">
                                            <td>1</td>
                                            <td>nombre producto</td>
                                            <td> <input type="number" value="2" class="cantidad"></td>
                                            <td>S/.50.00</td>
                                            <td>S/.100.00</td>
                                            <td> <button class="btn btn-danger">X</button></td>
                                        </tr>
                                        <tr style="color: black; ">
                                            <td colspan="4" class="text-center">TOTAL</td>
                                            <td>S/.100.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           </div>

                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FIN DE CONTENIDO-->


    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="plantilla/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="plantilla/Admin/vertical/assets/pages/datatables-demo.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>
</body>
</html>