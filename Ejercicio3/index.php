<html>
    <head>
        <link rel="stylesheet" href="../Ejercicio2/style.css">
    </head>
    <body>
    <?php
        if(isset($_COOKIE['background']) && isset($_COOKIE['color']) && isset($_COOKIE['lenguage'])){
            header("location:ver_formulario.php");
        }else{
            echo '<form action="ver_formulario.php" method="POST">
                <select name="lenguage[]">
                    <option value="en">English</option>
                    <option value="es">Spanish</option>
                </select>
                <label for="lenguage[]">Lenguage</label><br>
                <input type="color" name="background">
                <label for="backgroundcolor">Background color</label><br>
                <input type="color" name="color">
                <label for="color">Text color</label><br>
                <input type="submit" value="OK" name="values">
            </form>';
        }
        ?>
    </body>
</html>