<html>
    <head>
        <link rel="stylesheet" href="../Ejercicio2/style.css">
    </head>
    <body>
        <?php
            if(isset($_COOKIE['background']) && isset($_COOKIE['color']) && isset($_COOKIE['lenguage'])){
                include("../funciones.php");
                form_json();
                style_two($_COOKIE["color"],$_COOKIE["background"]);
            }else{
                $lenguage  =implode($_POST['lenguage']);
                $color = $_POST['color'];
                $background = $_POST['background'];
                setcookie("color","$color");
                setcookie("background","$background");
                setcookie("lenguage","$lenguage");             

                header('location:ver_formulario.php');

            }
        ?>
    </body>
</html>