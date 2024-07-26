<link rel="stylesheet" href="../assets/css/style.css">
<?php 
    require_once '../models/student.php';
    // TODO
    ?>
<form class="box-shadow">
    <h2> Edit Student</h2>
    <div>
        <?php 
        $classes = getClasses();
        foreach($classes as $class):
            // TODO 
        ?>
        <div>
            <input type="radio" name="class" value="<?=$class[0]?>" required> 
            <?=$class[1]?>
        </div>
        <?php 
            endforeach;
        ?>
    </div>
    <input type="text" style="display:none" name='id' value='//TODO'>
    <input type="text" name="name" placeholder="Enter your name" required value='//TODO'>
    <input type="email" name="email" placeholder="Enter your email" required value='//TODO'>
    <select name="gender"  required>
    <option selected disabled>Select your gender</option>
    <?php 
        $genders = getGenders();
        foreach($genders as $gender):
            // TODO
        ?>
    <option value="<?=$gender[0]?>" > <?=$gender[1]?></option>
    <?php 
        endforeach; 
    ?>
    </select>
    <textarea required name="hobby" id="" cols="20" rows="5" placeholder="Enter your hobby"><!-- TODO --></textarea>
    <div class='form-btn'>
        <button class='btn teal'><a href="../index.php">Cancel</a></button>
        <button class="btn warning" type="submit">Edit Student</button>
    </div>

</form>