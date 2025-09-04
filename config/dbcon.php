<?php
//connection to mysql database

$host = "sql100.infinityfree.com";  //database host
$username = "if0_39861603";  //database user
$password = "26IRR3vVTzA";    //database password
$database = "if0_39861603_cashapp_pay";  //database name

$con = mysqli_connect("$host","$username","$password","$database");

if(!$con)
{
    echo 'error in connection';
}

