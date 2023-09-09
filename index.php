<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM users
                    WHERE user_name = '%s'",
                   $mysqli->real_escape_string($_POST["username"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: home.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="logo.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="logo.png" type="image/x-icon" sizes="300*300">
    <title>Logistima</title>
</head>
<body>

    <div class="counter-form-sing-up">
        <form method="post">
            <h2>LOGIN</h2>
            <?php if ($is_invalid): ?>
                <em>Invalid login</em>
            <?php endif; ?>
            <input type="text" name="username" id="username" placeholder="username" class="form-input">
            <input type="password" name="password" placeholder="password" class="form-input">
            <button class="btn-sing">login</button>
            <p>you dont have an acount? <a href="singup.html">sing up</a></p>
			</form>
    </div>
    <script src="app.js"></script>
</body>
</html>