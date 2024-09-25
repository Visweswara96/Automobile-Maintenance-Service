<?php

include_once('conn.php');
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $service = $_POST['service'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $sql = "INSERT INTO roses (nam, em, ph, ser, dat, t) VALUES ('$name', '$email', '$phone', '$service', '$date', '$time')";
        if(mysqli_query($conn, $sql)) 
{
    echo "<script>";
    echo "alert(\"Your appointment has been booked successfully.\");";
    echo "window.location.href = './index.html';";
    echo "</script>";
    exit;
}

 else {  
            header("Location:index.php");
            // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    $conn->close();

?>
