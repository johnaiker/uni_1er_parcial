<?php
function validar_tipo_dato($entrada) {
    if (filter_var($entrada, FILTER_VALIDATE_INT) !== false) {
        echo "Ha ingresado un valor de tipo Int\n";
    } elseif (filter_var($entrada, FILTER_VALIDATE_BOOLEAN) !== false) {
        echo "Ha ingresado un valor de tipo Bool\n";
    } else {
        echo "Ha ingresado un valor de tipo String\n";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 0 auto; padding: 0;">
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <h4 class="h1 pl-6 my-2 text-uppercase" style="color: white; font-weight: bold; margin-left: 5rem"><i class="bi bi-award mr-3"></i> Bootstrap</h4>
    </nav>
    <div class="container py-5">
        <div class="card py-4 mt-6 mx-auto text-center" style="max-width: 600px;">
            <h4 class="h4 mb-4 text-uppercase">Verificar el tipo de dato</h4>
            <?php if (!empty($_GET['testvar'])) { ?>
                <div class="alert alert-primary">
                    <i class="bi bi-check-square-fill"></i>
                    <span>
                        <?php
                        $testvar = $_GET['testvar'];
                        validar_tipo_dato($testvar);
                        ?>
                    </span>
                </div>
            <?php } else { ?>
                <span class="alert alert-danger">
                    <div class="card-body">
                        <i class="bi bi-exclamation-circle-fill"></i>
                        <?= "Ingrese la variable 'testvar' via GET"; ?>
                </span>
            <?php } ?>

        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>