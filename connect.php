<?php

$con=new mysqli('localhost','root', '', 'crudoperation');

if(!$con){
    echo "Connection successfull";
}else{
    die(mysqli_error($con));
}




?>