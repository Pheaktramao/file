<?php
//TODO: GET all values(Gender,Name,Batch,Bio,Skill) from inputs and display the result below
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    if (isset($_POST['name'])!= ''
    && isset($_POST['gender']) != ''
    && isset($_POST['batch']) != '' 
    && isset($_POST['bio']) != '' 
    && isset($_POST['skill']) != '') {
        # code...
        $name = $_POST['name'];
        if ($_POST['gender'] == 'male'){
            $genders = 'images/male.jpg';
        }elseif ($_POST['gender'] == 'female') {
            $genders = 'images/female.jpg';
        }else{
            $genders = 'images/other.jpg';
        }
        $batch = $_POST['batch'];
        $bio = $_POST['bio'];
        $skills = $_POST['skill'];
    }
}
?>
<link rel="stylesheet" href="css/style.css">
<div class="user-info">
    <div class="user-info-header">
        <img id="userProfile" src="<?=$genders?>" alt="">
        <h2 id="userName"><?= $name;?></h2>
        <span>Batch - <span id="userBatch"><?=$batch;?></span></span>
    </div>
    <div class="user-info-body">
        <p id="userBio"><?= $bio;?></p>
        <div id="userSkills">
            <?php
                foreach ($skills as $skill) {
                    # code..
                    if ($skill == 'javascript' ) {
                        # code...
                        $color = 'j';
                    }elseif ($skill == 'veu js') {
                        # code...
                        $color = 'v';
                    }elseif ($skill == 'database') {
                        # code...
                        $color = 'd';
                    }
                }
            ?>
            <span class="<?=$color;?>"><?=$result;?></span>
        </div>
    </div>
</div>