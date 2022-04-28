<?php include '../shared/head.php'; 
      include '../shared/nav.php';
      include '../genrel/env.php';
      include '../genrel/functions.php';

      if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $sql_select = "SELECT * FROM `categories` where id = $id";
            $ss = mysqli_query($conn,$sql_select);
            $row = mysqli_fetch_assoc($ss);
            $name = $row['name'];

            if(isset($_POST['update'])){
                $name = $_POST['name'];
                $sql_updata = "UPDATE `categories` SET  `name`= '$name' where id = $id";
                $u = mysqli_query($conn,$sql_updata);
                header('location: /hospital/category/list.php');
            }
        }
?>
      <h3 class="text-center my-3" style="color: darkgrey;">Update Category</h3>

      <div class="container col-8">
            <div class="card">
                  <div class="card-body">
                        <form method="POST">
                              <div class="form-group mt-2">
                                    <label>Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Your Name" value="<?php echo $name ?>">
                              </div>
                              <div class="d-grid gap-2 col-12 mx-auto mt-5">
                                    <button  class="btn btn-block btn-warning" name="update">Update Category</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>




<?php include '../shared/script.php'; ?>