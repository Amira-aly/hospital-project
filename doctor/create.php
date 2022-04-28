<?php include '../shared/head.php'; 
      include '../shared/nav.php';
      include '../genrel/env.php';
      include '../genrel/functions.php';

      $select = "SELECT * FROM `categories`";
      $s = mysqli_query($conn,$select);

      if(isset($_POST['send'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $category_id = $_POST['category_id'];
            $insert = "INSERT INTO `doctors` VALUES (NULL, '$name','$email',$category_id)";
            $i = mysqli_query($conn,$insert);
            testMessage($i, "Insert Doctor");
         }
?>
      <h3 class="text-center my-3" style="color: darkgrey; ">Create New Doctor</h3>

      <div class="container col-8 ">
            <div class="card">
                  <div class="card-body">
                        <form method="POST">
                              <div class="form-group mt-2">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Your Name" >
                              </div>
                              <div class="form-group mt-2">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="text" placeholder="Your E-mail" >
                              </div>
                              <div class="form-group mt-2">
                                    <label>Category</label>
                                    <select name="category_id"  class="form-control">
                                    <?php foreach($s as $data){?>
                                          <option value="<?php echo $data['id'] ?>" ><?php echo $data['name'] ?></option>
                                    <?php } ?>
                                    </select>
                              </div>
                              <div class="d-grid gap-2 col-12 mx-auto mt-5">
                                    <button  class="btn btn-block btn-primary" name="send">Add Doctor</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>




<?php include '../shared/script.php'; ?>