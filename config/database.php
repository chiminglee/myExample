<?php

    $server='localhost';
    $id='center61';
    $pwd='57500@ncu';
    $dbname='myexample';
    $con = mysqli_connect($server , $id , $pwd);
    if (!$con){
        die("Could not connect: " . mysql_error());
    }
	global $con;
    mysqli_select_db($con , $dbname);
    mysqli_query($con ,"SET NAMES utf8");

?>