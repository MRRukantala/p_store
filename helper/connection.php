<?php

    $HOST_NAME = "localhost";
    $USER = "root";
    $PASSWORD = "";
    $DATABASE = "store";

    $CONNECTION = mysqli_connect($HOST_NAME, $USER, $PASSWORD, $DATABASE) or die ("Connection Error: ".mysqli_connect_error());


?>