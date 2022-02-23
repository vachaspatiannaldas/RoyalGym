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
                        <h1 style="color:#4e73df"><b></b></h1>
                        <h1 class="h4 text-gray-900 mb-4">City Form!</h1>
                      </div>
                      <form class="user">
                        <center>
                            <div class="form-group">
                          <select  class="form-control form-control-user" id="snm" placeholder="Enter State Name">
                              <option>-------------Select----------------</option>
                              
                              </select>
                        </div>
                            <div class="form-group">
                          <input type="text" class="form-control form-control-user" id="cnm" placeholder="Enter City Name">
                        </div>
                        
                        <div id="btn" class="btn btn-primary btn-user btn-block" style="width:180px;">
                          <input type="submit" name="btn" value="Save" class="btn btn-primary btn-user btn-block">
                          </div></center>
                       </form>
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

    <?php include("footer.php");?>