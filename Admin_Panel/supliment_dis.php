<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<?php include("header.php");
?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

         <!-- DataTales Example -->

          
       
         <?php $con=mysqli_connect("localhost","root","");
            mysqli_select_db($con,"gym");

              $s="select * from sup";
              $res=mysqli_query($con,$s);

        echo " <div class='card shadow mb-4'> ";
        echo "    <div class='card-header py-3'> ";
        echo "     <h6 class='m-0 font-weight-bold text-primary'>Suppliment Data</h6> ";
        echo "                 <a class='btn btn-primary' style='float:right' href='./supliment.php' role='button'>Add</a>
        ";
        echo " </div> ";
        echo "   <div class='card-body'> ";
        echo " <div class='table-responsive'> ";
        echo  " <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'> ";
        echo   " <thead> 
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Temp_Data</th>
                        <th>Link</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                  </thead>";
                echo "<tbody>";
              
                  while($r=mysqli_fetch_row($res))
                  {		
                    echo"<tr>";
                    echo "<td>".$r[0]."</td>";
                    echo "<td>".$r[1]."</td>";
                    echo "<td>".$r[2]."</td>";
                    echo "<td>".$r[3]."</td>";
                    echo "<td>".$r[4]."</td>";
                    
                    echo "<td><a href='supliment_up.php?id=$r[0]'><button style='font-size:15px'><i class='fa fa-edit'></i></button></a>&nbsp</td>
                    <td>
                    <a href='supliment_del.php?id=$r[0]'><button><i class='fas fa-trash-alt'></i></button></a>
                    </td>";
                    echo"</tr>";
                    
                  }
                  
                echo  "</tbody>";
                echo "</table>";
        ?>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
    <?php
      include("footer.php");
    ?>
<!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
