<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $sever="localhost";
    $user="root";
    $pass="root123456";
    $db="test";

    $con =new mysqli($sever,$user,$pass,$db);
    
    if($con->connect_error){
        die("Connection failed : ".$con->connect_error);
    }
    $con->set_charset("utf8");
    
    // ตัวแปลไม่จำเป็นต้อง $d_name ก็ได้ แต่ต้องคล้องจองกัน
    $d_name=$_POST['d_name'];
    $d_lastname=$_POST['d_lastname'];
    $d_age=$_POST['d_age'];
    $d_tel=$_POST['d_tel'];

    $sql="INSERT INTO data (d_id,d_name,d_lastname,d_age,d_tel)
    VALUES ('','$d_name' ,'$d_lastname','$d_age' ,'$d_tel')"; 

    if($con->query($sql)==TRUE){

        echo "<script>";
        echo "alert('NEW record created successfully');";
        echo "window.location.href='../index.php';";
        echo "</script>";
        // เมื่อ insert เสร็จจะทำให้กลับไปยังหน้า index อีกครั้ง

    }else{
        echo "ERROR".$sql."<BR>".$con->error;
    }

    ?>
</body>
</html>