<html>
<body>
<?php
    require 'SEWTEC_configuration.php';
    
    $emp_id=$_REQUEST["EmployeeID"];
    $emp_name=$_REQUEST["EmployeeName"];
    $nic=$_REQUEST["NIC"];
    $address=$_REQUEST["Address"];
    $contact=$_REQUEST["ContactNo"];
    
   
        
        $sql = "INSERT INTO employee ( Employee_ID, Emp_name, NIC, Address, Contact)
        VALUES ('$emp_id', '$emp_name','$nic', '$address','$contact')";

        if ($conn->query($sql) === TRUE) {
                header("Location: SEWTEC_manage_employee.php" );   
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
       
    
    
    
?>
    </body>
</html>