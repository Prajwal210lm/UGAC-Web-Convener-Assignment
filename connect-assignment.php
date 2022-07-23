<?php

$con=new mysqli('localhost','root','','studentinformation');//last one is database

if(!$con){
    die(mysqli_error($con));
}
