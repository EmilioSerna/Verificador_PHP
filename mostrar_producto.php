<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
        setTimeout(function() {
            window.location.href = "index.html";
        }, 3000);
    </script>
</head>
<body>
    <?php
        print_r($_GET);
        $query = "SELECT * FROM productos WHERE producto_codigo = ".$_GET["codigo"].";";
        echo($query);
    ?>
</body>
</html>