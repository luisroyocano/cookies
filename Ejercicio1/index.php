<html>
    <body>
    <style>
        *{
             font-family: 'Courier New', Courier, monospace;
             font-weight : bolder;
        }
    </style>
    <?php
       if(isset($_COOKIE["idioma_seleccionado"]) && isset($_COOKIE["color_seleccionado"])){
        header("location:ver_formulario.php");
    }else{
        echo ' 
        <form action="ver_formulario.php" method="POST">
        <input type="color" name="color"><label for="color">Color</label><br>
        <select name="idioma[]">
            <option value="spanish">Español</option>
            <option value="english">English</option>
        </select><label for="idioma">Idioma</label><br>
        <input type="submit" value="Enter" name="submit">
        </form>';
    }
    ?>
    </body>
</html>
