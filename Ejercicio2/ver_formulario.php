<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    if(!isset($_COOKIE["lenguage"]) && !isset($_COOKIE["backgroundcolor"]) 
    && !isset($_COOKIE["color"])){
        $color = $_POST['color'];
        $background = $_POST['background'];
        $lenguage = implode($_POST['lenguage']);
        setcookie("lenguage",$lenguage,time()*60);
        setcookie("background",$background,time()*60);
        setcookie("color",$color,time()*60);
        header("location:ver_formulario.php");
    }else{
        include("../funciones.php");
        echo_form($_COOKIE['lenguage']);
        style_two($_COOKIE['color'],$_COOKIE['background']);
    }
    ?>
    </body>
</html>