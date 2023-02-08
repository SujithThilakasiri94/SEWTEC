<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    $Item_no=$_REQUEST["ItemNo"];
    $Item_name=$_REQUEST["ItemName"];
    $Description=$_REQUEST["description"];
    $Buying=$_REQUEST["buying"];
    $SellingPrice=$_REQUEST["Selling_price"];
    $Item_category=$_REQUEST["ItemCategory"];
   
        
        $sql = "INSERT INTO items ( Item_no, Item_name, Description, Buying,Selling_price,Item_category)
        VALUES ('$Item_no', '$Item_name','$Description', '$Buying','$SellingPrice','$Item_category')";

        if ($conn->query($sql) === TRUE) {
                header("Location: SEWTEC_manage_items.php" );   
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>