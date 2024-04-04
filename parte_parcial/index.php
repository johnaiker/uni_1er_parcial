

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 0 auto; padding: 0; background-color: #e1e1e1;">
<?php


$rutas = ["CCS", "MCB", "BRM", "BAR"];

// $rutasDisponibles = array(
//     array("fecha" => "01/05/2024", "ruta" => "CCS", "asientos" => 4),
//     array("fecha" => "01/05/2024", "ruta" => "BRM", "asientos" => 0),
//     array("fecha" => "01/05/2024", "ruta" => "BAR", "asientos" => 3),
//     array("fecha" => "01/05/2024", "ruta" => "MCB", "asientos" => 6),
//     array("fecha" => "15/04/2024", "ruta" => "CCS", "asientos" => 5),
//     array("fecha" => "11/04/2024", "ruta" => "BRM", "asientos" => 7),
//     array("fecha" => "16/04/2024", "ruta" => "BAR", "asientos" => 7),
// );

$disponibles = 12;
function buscarVuelosDisp($rutaIda, $rutaVuelta, $tipoVuelo, $fechaIda, $fechaVuelta) {

    $rutasDisponibles = array(
        array("fecha" => "01/05/2024", "ruta" => "CCS", "asientos" => 4),
        array("fecha" => "01/05/2024", "ruta" => "BRM", "asientos" => 0),
        array("fecha" => "01/05/2024", "ruta" => "BAR", "asientos" => 3),
        array("fecha" => "01/05/2024", "ruta" => "MCB", "asientos" => 6),
        array("fecha" => "15/04/2024", "ruta" => "CCS", "asientos" => 5),
        array("fecha" => "11/04/2024", "ruta" => "BRM", "asientos" => 7),
        array("fecha" => "16/04/2024", "ruta" => "BAR", "asientos" => 7),
    );
    
    if($tipoVuelo == "fullway") {
        foreach ($rutasDisponibles as $ruta) {
            echo"EL pepe".$ruta["fecha"];
            # code...
        }
    } else {
        // foreach ($rutasDisponibles as list($a, $b)) {
        //     # code...
        // }
    }
    // if (filter_var($entrada, FILTER_VALIDATE_INT) !== false) {
    //     echo "Ha ingresado un valor de tipo Int\n";
    // } elseif (filter_var($entrada, FILTER_VALIDATE_BOOLEAN) !== false) {
    //     echo "Ha ingresado un valor de tipo Bool\n";
    // } else {
    //     echo "Ha ingresado un valor de tipo String\n";
    // }
}

if (!empty($_GET['flight_type']) && !empty($_GET['ruta_ida']) && !empty($_GET['ruta_ret']) && !empty($_GET['fecha_ida']) && !empty($_GET['fecha_ret'])) { 
    $flighttype = $_GET['flight_type'];
    $ruta_ida = $_GET['ruta_ida'];
    $ruta_ret = $_GET['ruta_ret'];
    $fecha_ida = $_GET['fecha_ida'];
    $fecha_ret = $_GET['fecha_ret'];
    buscarVuelosDisp($flighttype, $ruta_ida, $ruta_ret, $fecha_ida, $fecha_ret);
}
?>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container">
            <h4 class="h1 my-2 text-uppercase" style="color: white; font-weight: bold; margin-left: 5rem"><i class="bi bi-airplane-engines-fill"></i> Km airlines</h4>
        </div>
    </nav>
    <div class="container py-5">
        <div class="card py-4 mt-6 mx-auto text-center" >
            <h4 class="h4 text-uppercase">Seleccionar vuelo</h4>
            <div class="card-body">
                <form action="./index.php" method="GET">
                    <div class="pe-3 card mx-auto" style="max-width: 300px;">
                        <div class="row g-3">
                            <div class="col">
                                
                                <input class="form-check-input" type="radio" name="flight_type" id="exampleRadios1" value="fullway" checked>
                                <label class="form-check-label" for="exampleRadios1"> Ida y vuelta </label>
                            </div>
                            <div class="col">   
                                <input class="form-check-input" type="radio" name="flight_type" id="exampleRadios2" value="oneway" >
                                <label class="form-check-label" for="exampleRadios2"> Solo ida </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col" style="text-align: left">
                            <label for="ruta_ida" class="form-check-label pb-2 pl-2"> Ruta Ida </label>

                            <select name="ruta_ida" class="form-select" aria-label="Disabled select" id="ruta_ida">
                                
                                <option selected>Seleccionar ruta</option>
                                <?php
                                    foreach ($rutas as &$ruta) {
                                ?>

                                    <option  value="<?= $ruta ?>"><?= $ruta ?></option>
                                <?php } ?>
                                <!-- <option value="2">Two</option>
                                <option value="3">Three</option> -->
                            </select>
                        </div>
                        <div class="col" style="text-align: left">
                            <label for="ruta_ret" class="form-check-label pb-2 pl-2"> Ruta Vuelta </label>

                            <select class="form-select" name="ruta_ret" aria-label="Disabled select" id="ruta_ret">
                                
                                <option selected value="0">Seleccionar ruta</option>
                                <?php
                                    foreach ($rutas as &$ruta) {
                                ?>

                                <option value="<?= $ruta ?>"><?= $ruta ?></option>
                                <?php } ?>
                                <!-- <option value="2">Two</option>
                                <option value="3">Three</option> -->
                            </select>
                        </div>
                        <div class="col text-start">
                            <div class="row">
                                <div class="col">
                                    <label for="fecha_ida" class="form-check-label pb-2 pl-2"><i class="bi bi-calendar"></i> fecha de Ida </label>
                                    <input name="fecha_ida" type="text" placeholder="dd/mm/yyyy" class="form-control" id="fecha_ida" aria-describedby="emailHelp">
                                </div>
                                <div class="col">
                                    
                                    <label for="fecha_ret" class="form-check-label pb-2 pl-2"><i class="bi bi-calendar"></i> fecha retorno </label>
                                    <input name="fecha_ret" type="text" placeholder="dd/mm/yyyy" class="form-control" id="fecha_ret" aria-describedby="emailHelp">
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <button type="submit"  class="btn btn-primary mt-4 btn-lg"><i class="bi bi-search"></i> Buscar</button>
                        </div>
                    </div>
                </form>


            <!-- <div class="form-check">

            </div> -->
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>