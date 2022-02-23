<?php
    $con=mysqli_connect("localhost","root","","gym");
  //if(mysqli_selest_db($con,"dashboard"))
  
  if(isset($_POST['bt1']))
  {
   
  
    $userid=$_POST['t1'];
    $pass=$_POST['t2'];
    $sql="select * from register where userid='$userid' && pass='$pass'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num)
    {
      echo" <script>alert('Login Successfully...')</script>";
      header("location:index.php");
    }
    else
    {
      echo" <script>alert('Login Failed...')</script>";
    }
    if(empty($userid)) { array_push($errors,"Userid is required"); }
    if(empty($pass)) { array_push($errors,"Password is required"); }
    if(empty($userid && $pass)) { array_push($errors,"Userid & Password is required"); }


  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RoyalGym</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="log.css">

</head>

<body class="bg-gradient-primary body1">

 <div class="container">
   <form method="POST" action="">
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9" style="max-width:43%;">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!--div class="col-lg-6 d-none d-lg-block bg-login-image"></div-->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="images/gym.png" style="width:80px; height:75px;" alt="">
                    <h1 class="h4 text-gray-900 mb-4">ROYAL GYM</h1>
                  </div>
                  <form class="user" method="POST" action="">
                    <div class="form-group">
                      <input type="text"  class="form-control form-control-user" name="t1" aria-describedby="emailHelp" placeholder="User Id" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user"  name="t2" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div> 
                   <center><div> 
                          <input type="submit"  class="btn btn-primary btn-user btn-block" name="bt1" value="Login" style="width:180px;">
                    </div></center>   
                  </form>
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="registration.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

       </div>
      
     </div>
   </form>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#login').click(function(){
        var un=$("#username").val();
        var pas = $("#userpass").val();
        //alert(pas);
        $.ajax({
          url:"adminoperation.php",
          type:"post",
          data:{flag:'login',unm:un,ps:pas},
          success:function(data){
            alert(data);
            if (data=="success") {
              window.location.href="index.php";
            }
          },
          error:function(data) {
            alert(data);
          }
        })
      })
    });
  </script>
 
</body>

</html>
