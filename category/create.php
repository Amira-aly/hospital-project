<?php include '../shared/head.php'; 
      include '../shared/nav.php';
      include '../genrel/env.php';
      include '../genrel/functions.php';

      if(isset($_POST['send'])){
         $name = $_POST['name'];
         $insert = "INSERT INTO `categories` VALUES (NULL, '$name')";
         $i = mysqli_query($conn,$insert);
         testMessage($i, "Insert Category");
      }
?>
      <h3 class="text-center my-3" style="color: darkgrey;">Create New Category</h3>

      <div class="container col-8">
            <div class="card">
                  <div class="card-body">
                        <form method="POST">
                              <div class="form-group mt-2">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Your Name" >
                              </div>
                              <div class="d-grid gap-2 col-12 mx-auto mt-5">
                                    <button  class="btn btn-block btn-primary" name="send">Add Category</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>




<?php include '../shared/script.php'; ?>