<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="/imgs/logo/icon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" sizes="300*300">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Logistima</title>
</head>
<body>

    <div class="counter-form-sing-up">
        <form action="login.php" method="post">
            <h2>LOGIN</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> 
                <?php echo $_GET['error']; ?>
            </p>
            <?php } ?>
            <input type="text" name="uname" id="uname" placeholder="username" class="form-input">
            <input type="password" name="password" placeholder="password" class="form-input">

            <button class="btn-sing">login</button>
            <p>you dont have an acount? <a href="/singup.html">Sign up</a></p>
			<br>
			<p>forget your password<a href="/password.html"> reset</a></p>
        </form>
    </div>
    <script src="app.js"></script>
</body>
</html>