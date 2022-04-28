<?php 
      include '../shared/head.php'; 
      include '../shared/nav.php';
      include '../genrel/env.php';
      include '../genrel/functions.php';

    

      $select = "SELECT doctors.id as docID, doctors.name as docName, doctors.email as docEmail, categories.name as cat FROM `doctors` JOIN categories ON doctors.category_id = categories.id";
      $ss = mysqli_query($conn,$select);

       // delete Data
      if (isset($_GET['delete'])) {
            $id = $_GET['delete'];
            $sql_delete = "DELETE FROM `doctors` where id = $id";
            $d = mysqli_query($conn,$sql_delete);
            header('location:/hospital/doctor/list.php');   
      }

      
?>
      <h3 class="text-center my-3" style="color: darkgrey;">All Doctor</h3>

      <div class="container col-8">
            <div class="card">
                  <div class="card-body">
                        <table class="table table-sm">
                              <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Category Name</th>
                                    <th>Action</th>
                              </tr>
                              <?php foreach($ss as $data){?>
                              <tr>
                                    <td><?php echo $data['docID']?></td>
                                    <td><?php echo $data['docName']?></td>
                                    <td><?php echo $data['docEmail']?></td>
                                    <td><?php echo $data['cat']?></td>
                                    <td>
                                          <a href="/hospital/doctor/update.php?edit=<?php echo $data['docID']?>" class="btn btn-warning btn-sm">Edit</a>
                                          <a href="/hospital/doctor/list.php?delete=<?php echo $data['docID']?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                              </tr>
                              <?php } ?>
                              
                        </table>
                  </div>
            </div>
      </div>
<?php include '../shared/script.php'; ?>