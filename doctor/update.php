<?php include '../shared/head.php'; 
      include '../shared/nav.php';
      include '../genrel/env.php';
      include '../genrel/functions.php';


      $select = "SELECT * FROM `categories`";
      $s = mysqli_query($conn,$select);

      if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $sql_select = "SELECT * FROM `doctors` where id = $id";
            $ss = mysqli_query($conn,$sql_select);
            $row = mysqli_fetch_assoc($ss);
            $name = $row['name'];
            $email = $row['email'];
            $category = $row['category_id'];

            if(isset($_POST['update'])){
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $category_id = $_POST['category_id'];
                $sql_updata = "UPDATE `doctors` SET  `name`= '$name', `email` = '$email' ,`category_id`= $category_id  where id = $id";
                $u = mysqli_query($conn,$sql_updata);
                header('location: /hospital/doctor/list.php');
            }
        }
?>
      <h3 class="text-center my-3" style="color: darkgrey;">Update Doctors</h3>

      <div class="container col-8">
            <div class="card">
                  <div class="card-body">
                        <form method="POST">
                        <div class="form-group mt-2">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Your Name" value="<?php echo $name ?>" >
                              </div>
                              <div class="form-group mt-2">
                                    <label>E-mail</label>
                                    <input class="form-control" name="email" type="text" placeholder="Your E-mail" value="<?php echo $email?>" >
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
                                    <button  class="btn btn-block btn-warning" name="update">Update Doctors</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>




<?php include '../shared/script.php'; ?>