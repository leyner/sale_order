<?php 
    require 'querys/company.php'; 
    require 'querys/vendors.php';
    require 'querys/products.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leingtic Soluciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="card-title"><?php echo $company['nombre']; ?></h5>
                                <p class="card-text"><?php echo $company['descripcion']; ?></p>
                            </div>
                            <div class="col-sm-4">
                                <p class="card-text">E-mail: <?php echo $company['email']; ?></p>
                                <p class="card-text">Telefono: <?php echo $company['telefono']; ?></p>
                                <p class="card-text">Sitio web: <?php echo $company['sitioweb']; ?></p>
                            </div>
                            <div class="col-sm-4">
                                <p class="card-text"><?php echo $company['direccion']; ?> </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <h5 class="card-title">Detalle del proveedor</h5>
                               <p> <select class="form-select" aria-label="Proveedor">
                                    <?php foreach ($proveedores as $row) { ?>
                                        <option value="<?php echo $row['id_proveedor']; ?>"><?php echo $row['nombre_proveedor']; ?></option>
                                    <?php } ?>
                                </select></p>

                                <p class="card-text"> Dirección: <?php 
                                
                                echo $row['direccion']; ?></p>

                            </div>
                            <div class="col-sm-8">
                                <h5 class="card-title">Detalle de Orden de Compra</h5>   
                                <div class="row">
                                <div class="col-sm-2">
                                        
                                    </div>
                                    <div class="col-sm-5">
                                        <p>Fecha de orden: <?php echo (new \DateTime())->format('Y-m-d'); ?></p>
                                    </div>
                                    <div class="col-sm-5">
                                        <p>Fecha entrega: <input type="date"></p>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Referencia</th>
                                            <th scope="col">Descripción del producto</th>
                                            <th scope="col">Valor Unitario</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Valor Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary">Agregar item</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-8">
                                
                                </div>

                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-danger">Guardar orden de compra</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>