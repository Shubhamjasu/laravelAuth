<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/registerStyle.css')}}">
    <link rel="shortcut icon" href="{{ asset('images\favicon.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <div class="body">
        <div class="header">
            <a href="index.php">Home</button></a><h1>Registration Form</h1>
        </div>
        <div class="form">
            <form action="" method="GET">
                <div class="text">
                    <label for="name">Name:</label><br><input type="text" name="name" id="name">
                </div>
                <div class="text">
                    <label for="email">E-mail:</label><br><input type="email" name="email" id="email">
                </div>
                <div>
                    <span>
                    Gender :
                    <input type="radio" name="gender" value="male" checked id="male"><label for="male"> Male</label>&nbsp;&nbsp;
                    <input type="radio" name="gender" value="female" id="female"><label for="female"> Female</label>&nbsp;&nbsp;
                    <input type="radio" name="gender" value="other" id="other"><label for="other"> Other</label>
                    </span>
                </div>
                <div class="text">
                    <label for="phoneNo">Phone Number :</label><br><input type="number" name="phoneNo" id="phoneNo">
                </div>
                <div class="text">
                    <label for="pwd">Password :</label><br><input type="password" name="pwd" id="pwd">
                </div>
                <div class="text">
                    <label for="cpwd">Confirm Password :</label><br><input type="password" name="cpwd" id="cpwd">
                </div>
                <div class="text">
                    <label for="Address">Address :</label> <textarea name="Address" rows="5" cols="40" id="Address"></textarea>
                </div>
                <div class="btn">
                    <button type="reset" > Reset</button>
                    <button type="submit"> Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>