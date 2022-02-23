<?php
session_start();
if(isset( $_SESSION['email']))
{

}
else
{
  header('location:login_dashboard.php');
}
?>









<?php
include('dashboard.php');
?>

<?php
include('connection.php');
if (isset($_POST['flat_submit'])) {
 $name = $_POST['name'];
 $temp_data = $_POST['temp_data'];

 //first image code
 $image = $_FILES['file']['name'];
 $file_type = $_FILES['file']['type'];
 $file_size = $_FILES['file']['size'];
 $file_temp_loc = $_FILES['file']['tmp_name'];
 $file_store = "uploads/" . $image;
 if (move_uploaded_file($file_temp_loc, $file_store)) {
  $sql = "INSERT INTO `agent`( `name`, `temp_data`, `a_image`) VALUES ('$name','$temp_data','$image')
  ";
  if (mysqli_query($conn, $sql)) {
   echo "file inserted successfully";
  } else {
   echo "failed";
  }
 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <title>flat1</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
 </script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
 </script>
</head>

<body>
 <div class="container my-5">
  <div class="row">
   <div class="col-sm-4 mx-auto d-block bg-light">
    <h3 class="text-center text-info">Flat Details</h3>
    <form action="" method="post" enctype="multipart/form-data">
     <div class="form-group">
      <label for="name">Product Name</label>
      <input id="name" class="form-control" type="text" name="name">
     </div>
     <div class="form-group">
      <label for="mobile">Temp Data</label>
      <input id="mobile" class="form-control" type="text" name="temp_data">
     </div>

     <div class="custom-file mb-3">
      <input type="file" class="custom-file-input" id="customFile" name="file">
      <label class="custom-file-label" for="customFile">Choose
       file</label>
     </div>


     <div class="mt-3">
      <button type="submit" class="btn btn-primary" name="flat_submit">Submit</button>
     </div>
    </form>
   </div>
  </div>
 </div>
 <script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
   var fileName = $(this).val().split("\\").pop();
   $(this).siblings(".custom-file-label").addClass(
    "selected").html(fileName);
  });
 </script>
</body>

</html>