<link rel="stylesheet" href="styles.css">
<?php
    if(!isset($_COOKIE["idioma_seleccionado"]) && !isset($_COOKIE["color_seleccionado"])){
        $idioma = implode($_POST["idioma"]);
        $color = $_POST['color'];
        setcookie("idioma_seleccionado", $idioma,time()+60*2);
        setcookie("color_seleccionado", $color,time()+60*2);
        header("location:ver_formulario.php");
    }
    include("../funciones.php");
    style_one($_COOKIE["color_seleccionado"]);
    echo_form($_COOKIE["idioma_seleccionado"]);
?>
