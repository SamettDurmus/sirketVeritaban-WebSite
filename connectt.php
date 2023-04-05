<?php
$host="localhost";
$user="postgres";
$pass="1234";
$db="veriproje";
$con=pg_connect("host=$host dbname=$db user=$user password=$pass")or die ("Could not connect to Server\n");
?>