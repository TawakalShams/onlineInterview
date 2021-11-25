<?php

$id = $_GET['id'];

include 'includes/connection.php';
$sql = "SELECT * FROM interviewers WHERE id = '$id'";
$run = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php include_once 'layout/header.php'?>
<!--/. header -->

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include_once 'layout/navbar.php'?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Online Interview</span>
    </a>
    <!-- Sidebar -->
    <?php include_once 'layout/sidebar.php'?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Update Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Interviwers</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

          <!-- Main area -->
                  <!-- row1 -->
           <form action="includes/actions.php" method="POST">
                <div class="card-body">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                   <label for="exampleInputEmail1">Full Name</label>
                                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Full name">
                                </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                   <label for="exampleInputEmail1">Address</label>
                                  <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
                                </div>
                           </div>
                      </div>      <!-- /.row 1 -->

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                   <label for="exampleInputEmail1">Phone number</label>
                                  <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone number">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                   <label for="exampleInputEmail1">Gender</label>
                                   <select class="form-control" id="gender" name="gender">
                                     <option value="">None</option>
                                     <option value="Male">Male</option>
                                     <option value="Female">Female</option>
                                   </select>
                                </div>
                           </div>
                      </div>      <!-- /.row21 -->

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                              <label for="exampleInputEmail1">Departments</label>
                                   <select class="form-control" id="department" name="department">
                                     <option value="">None</option>
                                     <option value="IT">IT</option>
                                     <option value="Procurement">Procurement</option>
                                     <option value="Accout">Account</option>
                                   </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                   <label for="exampleInputEmail1">Password</label>
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
                                </div>
                           </div>
                      </div>      <!-- /.row 1 -->

                  </div>      <!-- /.card-body -->
            
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="updateInterviewer">Update</button>
                </div>
          </form>
                </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
 
  <?php include_once 'layout/footer.php'?>
  <?php include_once 'layout/scripts.php'?>
</body>
</html>


