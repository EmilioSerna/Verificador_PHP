function keyEventListener() {
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

function timerIndex() {
    setTimeout(function() {
        window.location.href = "./index.html";
    }, 3000);
}