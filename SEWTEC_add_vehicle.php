<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    $model=$_REQUEST["model"];
    $brand=$_REQUEST["Brand"];
    $make=$_REQUEST["Make"];
    $reg_no=$_REQUEST["Registration_No"];
    $reg_year=$_REQUEST["Year"];
    $area=$_REQUEST["Area"];
    $cost=$_REQUEST["Cost"];
   
        
        $sql = "INSERT INTO vehicle ( Model, Brand, make, Reg_no, reg_year, area, cost)
        VALUES ('$model', '$brand','$make', '$reg_no','$reg_year','$area','$cost')";

        if ($conn->query($sql) === TRUE) {
                header("Location: SEWTEC_Vehicle_Management.php" );   
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>