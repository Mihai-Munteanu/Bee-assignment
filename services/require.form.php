<?php

if(isset($_POST) && array_key_exists('name',$_POST))
{
    $name = $_POST['name'];
    echo "<div class='text-2xl py-3 text-blue-800'>
        Welcome $name, please enjoy the game!
    </div>";

} else {
    return "please go back and insert your name";
}

?>
