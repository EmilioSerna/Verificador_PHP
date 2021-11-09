<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/functions.js"></script>
    <script type="text/javascript">
        timerIndex();
    </script>
    <script type="text/javascript">
        keyEventListener();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <h1 style='text-align: center'>

        <?php
        include("./inc/settings.php");

        try {
            $codigo = $_GET["codigo"];

            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM productos WHERE producto_codigo = $codigo");
            $stmt->execute();

            // Set the resulting array to associative
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $rows = $stmt->rowCount();

            if ($rows == 1) {
        ?>
                <div class="mostrarProducto">
                    <img src="<?= $result['producto_imagen'] ?>" width="530px" height="530px">

                    <div class="descripcionProducto">
                        <h1 class="titleSmall">Producto <?= $result['producto_nombre'] ?><br></h1>
                        <h2 class="subtitleLight"> Precio: $<?= $result['producto_precio'] ?><br></h2>
                        <h1 class="titleSmall">Cantidad: <?= $result['producto_stock'] ?><br></h1>
                    </div>
                </div>
            <?php
            } else {
            ?>
                <div class="centerElements">
                    <h1 class="title">Lo sentimos</h1>
                    <h2 class="subtitle">
                        Hubo un error al realizar el escaneo<br>
                        Int&eacute;ntalo de nuevo o avisa a un<br>
                        empleado de la sucursal para<br>
                        solicitar ayuda
                    </h2>
                </div>
        <?php
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </h1>
</body>

</html>