
<?php $conn=mysqli_connect("localhost","root","","gym");?>

<?php
$id = $_GET['id'];
echo $id;
?>
<!doctype html>
<html lang="en">

<head>
 <title>Title</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet"
  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
 <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
 <?php
  $sql = "SELECT register.fname,register.mobile,register.email,register.pass,package.choice FROM register INNER JOIN package ON register.userid=package.id WHERE choice="$id"
";
  $resultset = mysqli_query($conn, $sql) or die("database error:" . mysqli_error($conn));

  ?>
 <div class="container">
  <?php

    while ($record = mysqli_fetch_assoc($resultset)) {
    ?>
  <div class="row ">
   <div class="col-md-4 col-sm-12">
    <img class="img-fluid   img-thumbnail "
     src="uploads/<?php echo $record['flat_img_internal']; ?>"
     alt="Card image cap" style="height: 20rem; width:25rem">
   </div>
   <div class="col-md-4 col-sm-12 ">
    <span><i class="fa fa-map-marker mt-3"
      aria-hidden="true"></i></span>

    <p class="margin-left:20px;">
     <?php echo $record['name']; ?>,<?php echo $record['full_address']; ?>
     <br> By Vertex Properties</br>
    </p>
    <p>Cost <span style="margin-left: 100px;">:</span>
     <strong><?php echo $record['flat_rate']; ?></strong>
    </p>
    <p>Built Up Area<span style="margin-left: 42px;">:</span>
     <strong><?php echo $record['sq_ft']; ?></p></strong>
    <p>Property Type<span style="margin-left: 38px;">:</span>
     <strong> <?php echo $record['property_type']; ?></strong></p>
    <p>Property For<span style="margin-left: 48px;">:</span>
     <strong>Sale</strong></p>
    <p>BedRoom<span style="margin-left: 65px;">:</span>
     <strong> <?php echo $record['flat_type']; ?></strong></p>
    <div class=" ">
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
             <label for="client_name">Your Name</label>
             <input id="client_name" class="form-control" type="text"
              name="client_name" placeholder="abc">
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
          <div class="row">
           <div class="col-sm-6">
            <div class="form-group">
             <label for="country">Country</label>
             <select id="country" class="form-control" name="country">
              <option value="india">India</option>
              <option value="india">India</option>
              <option value="india">India</option>
              <option value="india">India</option>
              <option value="india">India</option>
             </select>
            </div>
           </div>
           <div class="col-sm-6">
            <div class="form-group">
             <label for="mobile">Mobile</label>
             <input id="mobile" class="form-control" type="mobile"
              name="mobile" placeholder="">
            </div>
           </div>
          </div>
          <div class="form-group">
           <label for="descriptions"
            class="float-left">Description</label>
           <textarea id="descriptions" class="form-control"
            name="descriptions" rows="3"
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
    </div>
   </div>
   <div class="col-md-4 col-sm-12 p-5 ">
    <div class="card p-3 mx-auto d-block"
     style="height:15rem;width:15rem;">
     <img
      class="card-img-top rounded-circle img-fluid mx-auto d-block "
      src="images/avatar.PNG" alt="" style="width: 5rem">
     <div class="card-body text-center">
      <h5 class="card-title font-weight-normal">abc
      </h5>
      <p class="card-text">birajdarmp@gmail.com</p>
      <p><span><i class="fa fa-phone-square"
         aria-hidden="true"></i></span>+917721077924</p>
     </div>
    </div>

   </div>
  </div>

  <?php  } ?>
  <h5 class="p-4" style="color:#ff9900">Additional Details
   <hr>
  </h5>
  <h5 class="p-4" style="color:#ff9900">Property Description
   <hr>
  </h5>

 </div>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous"></script>
 <script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
 <script
  src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
  crossorigin="anonymous"></script>
</body>

</html>