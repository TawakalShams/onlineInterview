<!DOCTYPE html>
<html lang="en">
<?php include_once 'layout/header.php'?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once 'layout/navbar.php'?>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Interviwers</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">List of Interviwers</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
          <div class="col-12">
         
            <!-- /.card -->

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Full name </th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Departments</th>
                    <th>Mob</th>
                    <th>Action</th>

                  </tr>
                  </thead>

                  <tbody>

                        <?php
                                include 'includes/connection.php';
                                $sql = "SELECT * FROM interviewers";
                                $qry = mysqli_query($conn, $sql);
                            if(mysqli_num_rows($qry)){
                                    while($row = mysqli_fetch_array( $qry)){
                                    ?>
                                        <tr>
                                            <td><?php  echo $row[1]?></td>
                                            <td><?php  echo $row[2]?></td>
                                            <td><?php  echo $row[4]?></td>
                                            <td><?php  echo $row[5]?></td>
                                            <td>+255<?php  echo $row[3]?></td>
                                            <td>
                                            <a href="deleteInterviwers.php?id=<?php echo $row[0]; ?>"> 
                                            Delete
                                             <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                            </a>
                                            <a href="updateInterviwers.php?id=<?php echo $row[0]?>">
                                            Update
                                            <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                                            </a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                            }
                        
                        ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Full name </th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Departments</th>
                    <th>Mob</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include_once 'layout/footer.php'?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include_once 'layout/scripts.php'?>
</body>
</html>
