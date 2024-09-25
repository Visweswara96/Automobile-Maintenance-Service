<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $db_name="ballaya";
    $conn=new mysqli($servername,$username,$password,$db_name);
    if($conn -> connect_error)
        die("lost".$conn ->connect_error);
?>