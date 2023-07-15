<?php
    $db_hostmame="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="test";
    $conn = mysqli_connect($db_hostmame,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo "Connection failed: ".mysqli_connect_error();
        exit;
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="Insert into users (name,email,password) values ('$name','$email','$password')";
    $result=mysqli_querry($conn,$sql);
    if(!result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    echo "Registration Successful";
    mysqli_close($conn);
?>
