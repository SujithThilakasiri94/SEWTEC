<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    
    $code=$_REQUEST["code"];
    
        
        $sql = "update employee set state = 'del' WHERE Employee_ID = '$code'";

        if ($conn->query($sql) === TRUE) {
            header("Location: SEWTEC_manage_employee.php" );
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>