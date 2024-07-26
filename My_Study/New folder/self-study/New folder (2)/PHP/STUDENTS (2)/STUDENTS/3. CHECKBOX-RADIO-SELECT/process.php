<?php // HEADER 
    require_once("./templates/header.php");
?>
<?php
// YOUR CODE HERE
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['subjects']) && isset($_POST['province']) && isset($_POST['sex'])) {
            # code...
            $province = $_POST['province'] ;
            $subjects = $_POST['subjects'] ;
            $sexs = $_POST['sex'];
        }

    }
?>
<div class="card mb-3">
     <div class="card-header">Province</div>
     <div class="card-body">
          <h2 class="display-3"><?php echo $province ?></h2>
     </div>
</div>
<div class="card mb-3">
     <div class="card-header">Gender</div>
     <div class="card-body">
          <!-- YOUR CODE HERE [gender] -->
          <?php
            foreach ($sexs as $sex) {
                echo $sex;
            }
            ?>
     </div>
</div>
<div class="card">
     <div class="card-header">Subject</div>
     <div class="card-body">
          <?php
                // YOUR CODE HERE [subject]
                foreach ($subjects as $subject) {
                    echo $subject ;
                }
            ?>
     </div>
</div>

<?php // FOOTER
    require_once("./templates/footer.php");
 ?>