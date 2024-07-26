<?php // HEADER 
    require_once("./templates/header.php");
?>
<?php
    // YOUR CODE HERE 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $color = $_POST['color'];
        $range = $_POST['range'];
        $date = $_POST['date'];
    }
?>
<div class="container">
     <div class="card">
          <div class="alert alert-secondary">
               <strong>Color: </strong> <span><?php echo $color; ?></span>
          </div>
          <div class="alert alert-info">
               <strong>Range: </strong> <span><?php echo $range; ?></span>
          </div>
          <div class="alert alert-danger">
               <strong>Date: </strong> <span><?php echo $date; ?></span>
          </div>
     </div>
</div>


<?php //FOOTER 
    require_once("./templates/footer.php");
?>