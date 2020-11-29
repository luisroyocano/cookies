<?php
    $lenguages = array("esp" => array("Nombre","Contraseña"),"en" => array("Name","Password"));
    function style_one($color){
        echo "<style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
        body{
            background-color: $color;
        }
        div{
            padding: 5px;
            background-color: white;
            width : 200px;
            border-radius: 5px;
            border: 2px solid cyan;
        }
    </style>";
    }

    function style_two($color,$background){
        echo "<style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
        body{
            background-color: $background;
            color: $color;
        }
    </style>";
    }

    function echo_form($lenguage){
        global $lenguages;
        if($lenguage === "spanish") $idiom = $lenguages["esp"];
        else $idiom = $lenguages["en"];
        echo '
        <div class="form">
            <form action="#" class="form">
            <input class="form" type="text" name="name" placeholder="'.$idiom[0].'..."><label class="form" for="nameEn">'.$idiom[0].'</label><br>
            <input class="form" type="password" name="password" placeholder="'.$idiom[1].'..."><label class="form" for="passEn">'.$idiom[1].'</label><br>
            <input class="form button" type="submit" name="submit" value="OK">
            </form>
            
        </div>';
    }

    function form_json(){
        $values = file_get_contents("configuration.json");
        $json = json_decode($values,true);
        foreach($json as $value){
            if($value = &$lenguage){
                echo '
                    <div class="form">
                        <form action="#" class="form">
                            <input class="form" type="text" name="name" placeholder="'.$value["name"].'..."><label class="form" for="nameEn">'.$value["name"].'</label><br>
                            <input class="form" type="password" name="password" placeholder="'.$value['password'].'..."><label class="form" for="passEn">'.$value['password'].'</label><br>
                            <input class="form button" type="submit" name="submit" value="OK">
                        </form>
                    </div>';
            }
        }
    }
?>