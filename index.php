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
    ?>
            <table border="1">
            <tr>
                <td>ลำดับ</td>
                <td>ชื่อ</td>
                <td>นามสกุล</td>
                <td>อายุ</td>
                <td>เบอโทรศัพท์</td>
            </tr>
            
    <?php
    $sql="SELECT *FROM data";
    $result =$con->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>


            <tr>
                <td><?php echo $row["d_id"];?></td>
                <td><?php echo $row["d_name"];?></td>
                <td><?php echo $row["d_lastname"];?></td>
                <td><?php echo $row["d_age"];?></td>
                <td><?php echo $row["d_tel"];?></td>
            </tr>
                


            <!-- echo $row["product_type_id"]."."." ชื่อ-นามสกุล : ".$row["product_type_id"]." ".$row["product_type_name"]." <br>";
        } -->
<?php
        }
    }else{
        echo "0 row";
    }

    $con->close();
?>
</body>
</html>