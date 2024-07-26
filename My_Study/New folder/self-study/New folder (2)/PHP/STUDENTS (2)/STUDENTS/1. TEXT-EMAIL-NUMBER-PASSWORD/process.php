<?php // HEADER
    require ("./templates/header.php");
 ?>
<ul class="list-group">
     <?php
   // YOUR CODE HERE
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $number = $_POST['number'];
    $message =$_POST['message'];
   }
?>
     <div class="container">
          <div class="card">
               <li class="list-group-item">Your name : <?php echo $name; ?></li>
               <li class="list-group-item">Your email : <?php echo $email; ?></li>
               <li class="list-group-item">Your password : <?php echo $password; ?></li>
               <li class="list-group-item">Your number : <?php echo $number; ?></li>
               <li class="list-group-item">Your message : <?php echo $message; ?></li>
          </div>
     </div>

</ul>
<?php // FOOTER
require ('./templates/footer.php');
 ?>