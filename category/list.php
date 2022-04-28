<?php 
      include '../shared/head.php'; 
      include '../shared/nav.php';
      include '../genrel/env.php';
      include '../genrel/functions.php';

      $select = "SELECT * FROM `categories`";
      $s = mysqli_query($conn,$select);

       // delete Data
      if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql_delete = "DELETE FROM `categories` where id = $id";
            $d = mysqli_query($conn,$sql_delete);
            header('location:/hospital/category/list.php');
            
      }

      
?>
      <h3 class="text-center my-3" style="color: darkgrey;">All Category</h3>

      <div class="container col-8">
            <div class="card">
                  <div class="card-body">
                        <table class="table table-sm">
                              <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                              </tr>
                              <?php foreach($s as $data){?>
                              <tr>
                                    <td><?php echo $data['id']?></td>
                                    <td><?php echo $data['name']?></td>
                                    <td>
                                          <a href="/hospital/category/update.php?edit=<?php echo $data['id']?>" class="btn btn-warning btn-sm">Edit</a>
                                          <a href="/hospital/category/list.php?delete=<?php echo $data['id']?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                              </tr>
                              <?php } ?>
                              
                        </table>
                  </div>
            </div>
      </div>
<?php include '../shared/script.php'; ?>