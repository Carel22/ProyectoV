<?php
function conexion(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "ProyectoV";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}
?>
