
<div class="container_edit">
        <form action="controllers/restaurant_owner/editeRestaurant.process.controller.php" enctype="multipart/form-data" method="post" class="form_edit">
            <div class="chengRes">
                <h1>Cheng your restaurant infomation</h1>
            </div>
            <div class="form-group">
                <label for="exampleInputName" class="text-dark">Restaurant Name:</label>
                <input type="text" name="resname" class="form-control" id="exampleInputName" value="<?php print_r($_SESSION['res_own']['restaurant_name']); ?>" />
            </div>
            <div class="form-group">
                <label for="text" class="text-dark">Address</label>
                <input type="text"  name='address' class="form-control" id="text"
                    aria-describedby="emailHelp" value="<?php print_r($_SESSION['res_own']['address']);  ?>" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="text-dark">Restaurant Photo</label>
                <input type="file" name="my_image" id="image">
                
            </div>
            <div class="form-group">
                <div style="width: 100%; display: flex; justify-content: space-between;">
                    <div style="width: 40%; display: flex; flex-direction: column;">
                        <label for="exampleInputPassword1" class="text-dark">Time open</label>
                        <input type="time" name="open" id="time" value="<?php print_r($_SESSION['res_own']['time_open']);?>">
                    </div>
                    <div style="width: 40%; display: flex; flex-direction: column;">
                        <label for="exampleInputPassword1" class="text-dark">Time close</label>
                        <input type="time" name="close" id="time" value="<?php print_r($_SESSION['res_own']['time_close']);?>" >
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" id="send" name="send" value="Save" style="padding: 10px 0px; font-size: 18px; background-color: rgb(79, 171, 233); border: none; border-radius: 10px; color: white;"/>
            </div>
        </form>
    </div>