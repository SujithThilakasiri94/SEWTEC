<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    
    $code=$_REQUEST["code"];
    
        
        $sql = "update items set status = 'del' WHERE Item_ID = '$code'";

        if ($conn->query($sql) === TRUE) {
            header("Location: SEWTEC_manage_items.php" );
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>