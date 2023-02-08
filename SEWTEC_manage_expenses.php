<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SEWTEC Manage Expenses</title>

  
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top" class="bg-dark">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="#">SEWTEC Distributors Private Limited - Katugasthota</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    
    <ul class="navbar-nav ml-auto ml-md-0">
      
     
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="SEWTEC_login.html" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
     
         
          <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manage Expenses</span>
        </a>
      </li>
         
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Final Report</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Special report</h6>
          <a class="dropdown-item" href="#">Report </a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">All reports</h6>
          <a class="dropdown-item" href="#">Final Report </a>
          
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
          
          
          
          
          <div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h5><center>Add Expenses</center></h5></div>
      <div class="card-body">
        <form method="POST" action="SEWTEC_add_expences.php">
          <div class="form-group">
            <div class="form-label-group">
              
            </div>
          </div>
             <div class="form-label-group">
              <input type="text" name="Description" id="inputDescription" class="form-control" placeholder="Description" required="required">
              <label for="inputDescription">Description</label>
            </div><br>
            <div class="form-label-group">
              <input type="text" name="Comments" id="inputComments" class="form-control" placeholder="Comments" required="required">
              <label for="inputComments">Comments</label>
            </div><br>
            <div class="form-label-group">
              <input type="text" name="Receipt" id="inputReceiptID" class="form-control" placeholder="Receipt" required="required">
              <label for="inputReceipt">ReceiptID</label>
            </div>
            <br>
           <div class="form-label-group">
              <input type="text" name="Amount" id="inputAmount" class="form-control" placeholder="Amount" required="required">
              <label for="inputAmount">Amount</label>
            </div>
            <br> <div class="form-label-group">
              <input type="date" name="Date" id="inputdate" class="form-control" placeholder="date" required="required">
              <label for="inputdate">Date</label>
            </div><br>
            <div class="form-label-group">
              <input type="time" name="Time" id="inputtime" class="form-control" placeholder="time" required="required">
              <label for="inputtime">Time</label>
            </div><br>
           
            
             <td><select name="Category" class="form-control"  required="required">
                
        <option value="-1">Select Category </option>
        <option value="Administrative">Administrative</option>
        <option value="Distribution">Distribution</option>
        <option value="Financial">Financial</option>
        <option value="Other">Other</option>    
		
                               </select>
            </td><br>
            
           
          
          <input class="btn btn-primary btn-block" type="submit" name="" value="Submit">
        </form>
     
      </div>
    </div>
          </div>


           
        <br><br><br><br><br><br>



    
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
              <h5>Expenses Details</h5></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Expenses ID</th>
                    <th>Description</th>
                    <th>Comments</th>
                    <th>Recipt</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Time</th>
                    
                      <th></th>
                      
                  </tr>
                </thead>
                        <?php
                     require 'SEWTEC_configuration.php';
                    $sql="select * from expences where status = 'active'";
                $r = $conn->query($sql);
                
              
                while($row = $r->fetch_array()){
                   
                    $y = $row["Description"];
                    $z = $row["Comments"];
                    $a = $row["Recipt"];
                    $b = $row["Amount"];
                    $c = $row["Category"];
                    $d = $row["Date"];
                    $e = $row["Time"];
                    $u = $row["Exp_ID"];
                    echo ("<tr>
                    <td>$u</td>
                      <td>$y</td>
                      <td>$z</td>
                      <td>$a</td>
                      <td>$b</td>
                      <td>$c</td>
                      <td>$d</td>
                      <td>$e</td>
                      <td><a href='SEWTEC_update_expences.php?code=$u'><img src='image/update.png'></a>  &nbsp;&nbsp;&nbsp;&nbsp;  <a href='SEWTEC_expences_delete.php?code=$u'><img src='image/delete.png'></a></td>
                          
            </tr>");
                    
                }
              
                ?>
                  
                <tfoot>
                  <tr>
                    <th>Expenses ID</th>
                    <th>Description</th>
                    <th>Comments</th>
                    <th>Recipt</th>
                    <th>Amount</th>
                    <th>Category</th>
                    <th>Date</th>
                    <th>Time</th>
                    
                      <th></th>
                      
                      
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
         
        </div>

      </div>
    

    
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © SEWTEC Distributors Pvt Ltd. All right reserved.</span>
          </div>
        </div>
      </footer>

    </div>
    


  
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="SEWTEC_login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="js/sb-admin.min.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
    </div>
</body>

</html>
