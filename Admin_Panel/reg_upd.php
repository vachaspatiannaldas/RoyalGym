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
                        <h1 style="color:#4e73df"><b>Register</b></h1>
                        <h1 class="h4 text-gray-900 mb-4">Update</h1>
                      </div>
                      <form class="user" method="POST" action="" enctype="multipart/form-data" name="f1">
                      <?php
                        $id = $_GET['id'];
                        $conn=mysqli_connect("localhost","root","","gym");
                        $sql1="select * from register where id='$id' ";
                        $rs1=mysqli_query($conn,$sql1);
                        while($row=mysqli_fetch_row($rs1))
		                   {
                          echo"  <center>
                          
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t2'  placeholder='Full Name' value='$row[1]'/>
                          </div>
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t3'  placeholder='Mobile' value='$row[2]'/>
                          </div>
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t4'  placeholder='Email' value='$row[3]'/>
                          </div>
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t5'  placeholder='Userid' value='$row[4]'/>
                          </div>
                          <div class='form-group'>
                                <input type='text' class='form-control form-control-user' name='t6'  placeholder='Password' value='$row[5]'/>
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
      $fname=$_POST['t2'];
      $mobile=$_POST['t3'];
      $email=$_POST['t4'];
      $userid=$_POST['t5'];
      $pass=$_POST['t6'];
 
        $sql="UPDATE register set fname='$fname', mobile='$mobile', email='$email', userid='$userid', pass='$pass' where id='$id' ";  
                
          if(mysqli_query($conn,$sql))
          {
            echo" <script>alert('Record Updated...')</script>";
           
          }
          else
          {
            echo" <script>alert('Record not updated')</script>";
          }
      
      
    }
    
//echo $sql;
//exit(); 

?>
    <?php include("footer.php");?>