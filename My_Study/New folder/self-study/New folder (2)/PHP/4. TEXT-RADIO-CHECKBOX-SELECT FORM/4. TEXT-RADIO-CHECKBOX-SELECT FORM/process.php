<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
     <tr>
          <th>Username</th>
          <th>Email</th>
          <th>Password</th>
          <th>Number</th>
          <th>Message</th>
          <th>Provinces</th>
          <th>Subject</th>
          <th>Gender</th>
     </tr>
     <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['number']) && isset($_POST['message']) && isset($_POST['selectProvince'])&& isset($_POST['subjects']) && isset($_POST['sex'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        $province = $_POST['selectProvince'];
        $subjects = $_POST['subjects'];
        $sexs = $_POST['sex'];

    ?>
     <tr>
          <td><?php echo $name; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $password; ?></td>
          <td><?php echo $number; ?></td>
          <td><?php echo $message; ?></td>
          <td><?php echo $province; ?></td>
          <td>
            
               <?php
                $result = "";
                   foreach($subjects as $subject) {
                    $result.= $subject . ",";
                   }
                   echo $result
                ?>
          </td>
          <td>
            <?php
                foreach ($sexs as $sex) {
                    echo  $sex ;
                }
            ?></td>
     </tr>
<?php }; }?>
</table>
<?php require_once 'templates/footer.php' ?>