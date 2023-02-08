<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    
    $code=$_REQUEST["code"];
    
        
        $sql = "update expences set status = 'del' WHERE Exp_ID = '$code'";

        if ($conn->query($sql) === TRUE) {
            header("Location: SEWTEC_manage_expenses.php" );
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>