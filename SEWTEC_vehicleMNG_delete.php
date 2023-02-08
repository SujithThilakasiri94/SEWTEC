<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    
    $code=$_REQUEST["code"];
    
        
        $sql = "update vehicle set status = 'del' WHERE vehicle_id = '$code'";

        if ($conn->query($sql) === TRUE) {
            header("Location: SEWTEC_Vehicle_Management.php" );
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>