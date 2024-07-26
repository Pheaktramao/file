<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET VALUE FROM INPUT FORM</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="controller.php" method="POST">
        <div class="form-header">Register form</div>
        <hr>
        <div class="form-body">
            <div><label for="name">Name:</label> <br>
                <input type="text" name="name" id="name" placeholder="Full name" required>
            </div>
            <div>
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" required>
                    <option disabled selected>Choose gender</option>
                    <option value="other">other</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div>
                <label for="batch">From batch:</label>
                <input type="radio" id="batch" name="batch" value="2021">2021
                <input type="radio" id="batch" name="batch" value="2022">2022
                <input type="radio" id="batch" name="batch" value="2023">2023
                <input type="radio" id="batch" name="batch" value="2024">2024
            </div>
            <div>
                <label for="skills">Skills:</label> <br>
                <input type="checkbox" id="skill" name="skill[]"  value="vue js">Vue JS
                <input type="checkbox" id="skill" name="skill[]"  value="javascript">Javascript
                <input type="checkbox" id="skill" name="skill[]"  value="database">Database
            </div>
            <div>
                <label for="bio">Bio: </label>
                <textarea name="bio" id="bio" cols="40" rows="8"></textarea>
            </div>
            <button type="submit" id="submit">Submit</button>
        </div>
    </form>

    
</body>
</html>