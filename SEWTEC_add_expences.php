<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    $description=$_REQUEST["Description"];
    $comments=$_REQUEST["Comments"];
    $recipt=$_REQUEST["Receipt"];
    $amount=$_REQUEST["Amount"];
    $category=$_REQUEST["Category"];
    $date=$_REQUEST["Date"];
    $time=$_REQUEST["Time"];
   
        
        $sql = "INSERT INTO expences ( Description, Comments, Recipt, Amount, Category, Date, Time)
        VALUES ('$description', '$comments','$recipt', '$amount','$category','$date','$time')";

        if ($conn->query($sql) === TRUE) {
                header("Location: SEWTEC_manage_expenses.php" );   
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>