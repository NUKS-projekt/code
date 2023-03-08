<?php

    session_start();
    header("location:login.html");
    $con=mysqli_connect("localhost","root");
    if($con){

        echo "Connection Successful";
    }

    else{
        echo "No Connection"
    }

    mysqli_select_db($con,"amazon_clone")

    $name=$_POST["email"];
    $pass=$_POST["password"];
    $quer="Select * from user-data where username = "$name" && password="$pass" ";
    $result=mysqli_query($con,$quer);
    $num=mysqli_num_rows($result);

    if($num==1)
    {
        echo "Duplicate Data";
    }

    else{
        $querr="insert into user-data(username,password) values('$name', '$pass')";
        mysqli_query($con,$querr);
    }
?>