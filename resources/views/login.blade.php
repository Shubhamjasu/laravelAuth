<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/loginStyle.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="body">
        <div class="header">
            <a href="index.php">Home</button></a><h1>Login</h1>
        </div>
        <div class="form">
            <form action="" method="GET">
                <div class="text">
                    <label for="email">E-mail:</label><br><input type="email" name="email" id="email">
                </div>
                
                <div class="text">
                    <label for="pwd">Password :</label><br><input type="password" name="pwd" id="pwd">
                </div>
                <div class="btn">
                    <label for="fpwd">Forget Password?</label><input type="checkbox" name="forgetP" id="fpwd"><br><br>
                    <button type="submit">login</button>
                </div>
            </form>
    </div>
</body>
</html>