<?php 
$conn=mysqli_connect("localhost","root","","gym");

if(isset($_POST['bt1']))
{

 

    $fname=$_POST['t1'];
    $mobile=$_POST['t2'];
    $email=$_POST['t3'];
    $userid=$_POST['t4'];
    $pass=$_POST['t5'];
    $sql="insert into register(fname,mobile,email,userid,pass) values('$fname', '$mobile', '$email', '$userid', '$pass')";
  // $result=mysqli_query($con);
  // $num=mysqli_num_rows($result);
//echo $sql;
//exit(); 
if(mysqli_query($conn,$sql))
{
  echo" <script>alert('Login Successfully...')</script>";
  header("location:login.php");
}
else
  echo" <script>alert('Login Failed...')</script>";}

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


</head>

<body class="bg-gradient-primary">

  <div class="container">

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
                      <input type="text" id="fname" class="form-control form-control-user" name="t1" aria-describedby="emailHelp" pattern="[a-zA-Z'-'\s]*" placeholder="Full Name" title="Only text container">
                    </div>
                    <div class="form-group">
                      <input type="text" id="mobile" class="form-control form-control-user" name="t2" aria-describedby="emailHelp" placeholder="Mobile No"  pattern="[7-9]{1}[0-9]{9}" 
         title="Phone number 9 digit with 0-9">
                    </div>
                    <div class="form-group">
                      <input type="email"  class="form-control form-control-user" name="t3" aria-describedby="emailHelp" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email"> 
                    </div>

                    
                    <div class="form-group">
                      <input type="text" id="userid" class="form-control form-control-user" name="t4" aria-describedby="emailHelp" placeholder="User Id" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="userpass" name="t5" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                    </div> 
                    
                   <center><div> 
                          <input type="submit"  class="btn btn-primary btn-user btn-block" name="bt1" value="Register"  style="width:180px;">
                    </div></center>   
                  </form>




                  <hr>
              
                </div>
              </div>
            </div>
          </div>
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

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
     </script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js">
     </script>
     <!-- jQuery library -->
     <!-- Popper JS -->
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
     </script>
     <script src="./register.js"></script>
</body>

</html>
