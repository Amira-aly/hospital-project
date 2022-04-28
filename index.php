<?php include './shared/head.php'; 
      include './shared/nav.php';
      include './genrel/env.php';


$select = "select * from `theem`";
$s = mysqli_query($conn , $select);
$row = mysqli_fetch_assoc($s);
$numberofColor =  $row['color'];

      
      if (isset($_GET['Change'])){
            $num = $_GET['Change'];
            $sql_updata = "UPDATE `theem` SET `color`= $num ";
            $u = mysqli_query($conn,$sql_updata);
            header("location: /hospital/index.php");
      }
      
?>
      <?php if ($numberofColor == '2') : ?>
      <a href="/hospital/index.php?Change=1"  class="btn btn-dark m-2" type="submit">Dark Mood</button>
      <?php else : ?>
      <a href="/hospital/index.php?Change=2"  class="btn btn-light m-2" type="submit">Light Mood</button>
      <?php endif; ?>



<?php include './shared/script.php'; ?>

   