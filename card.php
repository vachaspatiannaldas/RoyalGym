
  

<?php $conn=mysqli_connect("localhost","root","","gym");?>




<?php

if (isset($_POST['enquiry'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $sub = $_POST['sub'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];
  $sql =
    "INSERT INTO `contact`(`fname`, `lname`, `sub`, `email`, `msg`) VALUES ('$fname','$lname','$sub','$email','$msg')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>alert('Enquiry Success')</script>";
  } else {
    echo "failed";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport"
  content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css">
 <link rel="stylesheet" href="style.css">
 <title>flat_card</title>
</head>

<body>
 <?php
  $sql = "SELECT DISTINCT choice FROM package

";
  $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));
  ?>
 <div class="container">
  <div class="row">
   <?php
      while ($record = mysqli_fetch_assoc($resultset)) {
      ?> <div class="col-md-4 col-sm-4 py-5">
    <div class="card shadow-sm" style="height:30rem;">
     
     <div class="card-body bg-light">
      <p class="card-text">Package Name <span
        style="margin-left: 65px;">:</span>
       <strong><?php echo $record['choice']; ?></strong>
      </p>
      <p class="card-text text-justify">Price<span
        style="margin-left: 7px;">:</span>
       <strong>15000$</p></strong>
      <p class="card-text text-justify">lorem lorem<span
        style="margin-left: 5px;">:</span>
      <p class="card-text text-justify">BedRoom<span
        style="margin-left: 35px;">:</span>
<div class="d-flex justify-content-between align-items-center">

      </div>
     </div>
     <div class="card-footer pb-5 bg-white ">
      <div class=" text-center">





       <a href="view_details.php?id= <?php echo $record['id']; ?>"
        class='btn btn-warning btn-sm'>view</a>







        
       <!-- required bootstrap js -->
       <a href=" #" class=" btn btn-outline-dark btn-sm"
        data-toggle="modal" data-target="#send_enquiry">
        Send Enquiry
       </a>

       <div class="modal  fade" id="send_enquiry" role="dialog">
        <div class="modal-dialog modal-md">
         <div class="modal-content">
          <div class="modal-header">
           <h6 class="modal-title font-bold-normal">Send
            Enquiry</h6>
           <button type="button" class="close"
            data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
           <form action="" method="post">
            <div class="row">
             <div class="col-sm-6">
              <div class="form-group">
               <label for="client_name">First Name</label>
               <input id="fname" class="form-control"
                type="text" name="fname" placeholder="abc">
              </div>
             </div>
              <div class="col-sm-6">
              <div class="form-group">
               <label for="client_name">Last Name</label>
               <input id="lname" class="form-control"
                type="text" name="lname" placeholder="abc">
              </div>
             </div>

            <div class="col-sm-6">
              <div class="form-group">
               <label for="client_name">Subject</label>
               <input id="sub" class="form-control"
                type="text" name="sub" placeholder="abc">
              </div>
             </div>

             <div class="col-sm-6">
              <div class="form-group">
               <label for="email">Email</label>
               <input id="email" class="form-control" type="email"
                name="email" placeholder="abc@gmail.com">
              </div>
             </div>
            </div>
            
            <div class="form-group">
             <label for="descriptions"
              class="float-left">Msg</label>
             <textarea id="msg" class="form-control"
              name="msg" rows="3"
              placeholder="I am interested in your property. Please get in contact with me."></textarea>
            </div>
            <button type="submit" name="enquiry"
             class="btn btn-outline-dark btn-sm btn-block">
             Submit
            </button>
          </div>
         </div>
        </div>
       </div>

       </form>
      </div>
     </div>
    </div>
   </div>
   <?php } ?>
  </div>
 </div>

 
 <script
  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
 </script>
 <script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js">
 </script>
 <script
  src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js">
 </script>
</body>

</html>