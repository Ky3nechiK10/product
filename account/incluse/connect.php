<?php
    $connect = mysqli_connect('localhost', 'root', '', 'vosvod');

    if(!$connect){
        die('Error connect to DataBase');
    }

?> 