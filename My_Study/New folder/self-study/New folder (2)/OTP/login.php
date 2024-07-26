<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" class="mt-3 p-3 mg-5">
        <legend>Login</legend>
        <form action="sendOTP.php" method="post">
            <div class="">
                <input type="email" name= "email" required>
                <span>Email Address</span>
            </div>
            <div class="">
                <input type="text" name="pwd" required>
                <span>Password</span>
            </div>
        </form>
    </div>
</body>
</html>