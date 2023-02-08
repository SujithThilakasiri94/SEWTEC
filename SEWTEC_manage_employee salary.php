<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Manage Employee</title>

  
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
        <a class="nav-link" href="SEWTEC_manage_employee.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Manage Employee</span>
        </a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Salary Payments</span>
        </a>
      </li>
         <li class="nav-item active">
        <a class="nav-link" href="SEWTEC_manage_attendence.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Attendence</span>
        </a>
      </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Final Report</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Special reports</h6>
          <a class="dropdown-item" href="#">Report 01</a>
          <a class="dropdown-item" href="#">Report 02</a>
          <a class="dropdown-item" href="#">Report 03</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">All reports</h6>
          <a class="dropdown-item" href="#">Report 04</a>
          <a class="dropdown-item" href="#">Report 05</a>
        </div>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
          
          
          
          
          <div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header"><h5><center>Employee Salary Payments</center></h5></div>
      <div class="card-body">
        <form method="POST" action="SEWTEC_add_dealers.php">
          <div class="form-group">
            <div class="form-label-group">
              
            </div>
          </div>

            
                            <td><select name="type" class="form-control"  required="required">
                
        <option value="-1">Employee Name</option>
        <option value="Admin"></option>
        <option value="Sales Rep"></option>
		
                               </select>
                    </td>
            <br>
            
             <div class="form-label-group">
              <input type="text" name="Username" id="inputUsername" class="form-control" placeholder="Username" required="required">
              <label for="inputUsername">Basic Salary</label>
            </div>
            <br>
            
           <div class="form-label-group">
              <input type="text" name="Username" id="inputUsername" class="form-control" placeholder="Username" required="required">
              <label for="inputUsername">Bonus</label>
            </div>
            <br>
            
            <div class="form-label-group">
              <input type="text" name="Username" id="inputUsername" class="form-control" placeholder="Username" required="required">
              <label for="inputUsername">EPF</label>
            </div><br>
            
                        <div class="form-label-group">
              <input type="text" name="Username" id="inputUsername" class="form-control" placeholder="Username" required="required">
              <label for="inputUsername">ETF</label>
            </div><br>
            
            <div class="form-label-group">
              <input type="text" name="Username" id="inputUsername" class="form-control" placeholder="Username" required="required">
              <label for="inputUsername">Total</label>
            </div><br>
            
           
            

          
          <input class="btn btn-primary btn-block" type="submit" name="" value="Submit">
        </form>
     
      </div>
    </div>
          </div>


           
        <br><br><br><br><br><br>



    
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
              <h5>Salary Details</h5></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Employee Name</th>
                    <th>Basic Salary</th>
                    <th>Bonus</th>
                    <th>EPF</th>
                    <th>ETF</th>
                    <th>Total</th>
                    
                
                      
                  </tr>
                </thead>
        
                  
                <tfoot>
                  <tr>
                    
                       <th>Employee Name</th>
                    <th>Basic Salary</th>
                    <th>Bonus</th>
                    <th>EPF</th>
                    <th>ETF</th>
                    <th>Total</th>
                    
        
                      
                      
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
