function getKeyChar() {
    if (window.addEventListener) {
        var codigo = "";
        window.addEventListener("keydown", function (e) {
            codigo += String.fromCharCode(e.keyCode);
            if (e.keyCode == 13) {
                window.location = "mostrar_producto.php?codigo=" + codigo;
                codigo = "";
            }
        }, true);
    }
}