<?php

$mysqli = mysqli_connect("mysql-server", "root", "secret", "testing_docker") or die("tidak bisa!");

if(!mysqli_connect_error()) {
    echo "bisa eh !!";
} else { 
    echo "nggak bisa deng :(". mysqli_connect_error();
}