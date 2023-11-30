<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Autó nyilvántartás</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <h1>Autó Nyilvántartás PHP-ban</h1>
    <h2>Készítette: Ecsedi Tamás</h2>

    <p>
        <h3>Lista megtekintése</h3>
        <?php include 'listazas.php';  ?>

        <a href="./regisztracio.php">
            <button>
                <h3>Autó regisztrálása</h3>
            </button>
        </a>
    </p>

</body>
</html>