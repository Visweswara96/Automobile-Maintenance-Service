<?php
session_start();
$_SESSION["name"] = "Vishu";
$_SESSION["age"] = "20";
if(isset($_SESSION["name"]))
{ 
    echo " The name is ".$_SESSION['name'].".<br>";

}
if(isset($_SESSION["age"]))
{ 
    echo " Age is " . $_SESSION["age"];
}
session_unset(); 
session_destroy(); 
?>
