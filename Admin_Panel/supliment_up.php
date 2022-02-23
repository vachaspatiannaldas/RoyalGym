<?php include("header.php");
 ?>

 
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="container" style="width:700px;">

            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                  <!--div class="col-lg-5 d-none d-lg-block bg-register-image"></div-->
                  <div class="col-lg-12">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 style="color:#4e73df"><b>Payment</b></h1>
                        <h1 class="h4 text-gray-900 mb-4">Update</h1>
                      </div>
                      <form class="user" method="POST" action="" enctype="multipart/form-data" name="f1">
                      <?php
                        $id = $_GET['id'];
                        $conn=mysqli_connect("localhost","root","","gym");
                        $sql1="select * from sup where id='$id' ";
                        $rs1=mysqli_query($conn,$sql1);
                        while($row=mysqli_fetch_row($rs1))
		                   {
                          echo"  <center>
                          
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t2'  placeholder='Package Name' value='$row[1]'/>
                          </div>
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t3'  placeholder='Amount' value='$row[2]'/>
                          </div>
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t4'  placeholder='Date' value='$row[3]'/>
                          </div>
                         

                          <div class='row'>
                          <div class='form-group'>
                           <label for='t5'>Select Image
                            image:</label>
                           <input id='t5' class='form-control-file mb-2'
                            type='file' name='t5'  value='$row[4]'>
                          </div>

                          </div>
                         
                          <div> 
                            <input type='submit'  class='btn btn-primary btn-user btn-block' name='bt1' value='Update' style='width:180px;'>
                          </div>
                          </center>";
                        }
                     ?>
                      </form>
                      <!--hr>
                      <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="login.html">Already have an account? Login!</a>
                      </div<!--  -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


 <?php   
	
	$conn=mysqli_connect("localhost","root","","gym");
		
	//mysqli_select_db($conn,"dashboard");
			
		if(isset($_POST['bt1']))
		{
              
            $name=$_POST['t2'];
            $temp_data=$_POST['t3'];
            $link=$_POST['t4'];
          
            //first image code
            $a_image = $_FILES['t5']['name'];
            $file_type = $_FILES['t5']['type'];
            $file_size = $_FILES['t5']['size'];
            $file_temp_loc1 = $_FILES['t5']['tmp_name'];
            $file_store1 = "img/" . $a_image;
            if (!empty($_FILES['t5']['name']))//both image not empty but updated
            { //not empty
              if (move_uploaded_file($file_temp_loc1, $file_store1)) {
                $sql_update = "UPDATE `sup` SET `name`='$name',`temp_data`='$temp_data',`link`='$link',`a_image`='$a_image' WHERE id='$id'";
              }
            } else // no image updated
            {
                $sql_update = "UPDATE `sup` SET `name`='$name',`temp_data`='$temp_data',`link`='$link', WHERE id='$id'";
            }
            $run_update = mysqli_query($conn, $sql_update);
            if ($run_update) {
                echo" <script>alert('Record Updated...')</script>";


            } else {
                echo" <script>alert('Record Not Updated...')</script>";
            }
          }
          
          
          
          

       
      
 
      
          
      
    
    
//echo $sql;
//exit(); 

?>
    <?php include("footer.php");?>