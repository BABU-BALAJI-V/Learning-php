<?php
/*$db_hostmame="127.0.0.1";
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
    $sql="select *from users";
    $result=mysqli_querry($conn,$sql);
    if(!result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }
   while($row=mysqli_fetch_assoc($result))
   {
    echo $row['name']."<br/>";
   }
   mysqli_close($conn);
?> */

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
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select *from users where email='$email' and password='$password'";
    $result=mysqli_querry($conn,$sql);
    if(!result)
    {
        echo "Error: ".mysqli_error($conn);
        exit;
    }
    if($row)
    echo "Hello".$row['name']."<br/>";
    else
    echo "Login Failed<br/>";
   mysqli_close($conn);
?>   