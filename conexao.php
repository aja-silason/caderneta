<?php

$host = "localhost";
$username = "root";
$password = "";
$base_de_dados = "caderneta";

$connect = mysqli_connect($host, $username, $password, $base_de_dados);

if(mysqli_connect_error()):
    echo "Falha na conexão com o servidor".mysqli_connect_error();
endif;



?>