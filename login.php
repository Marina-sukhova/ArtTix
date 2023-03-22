<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM users
                    WHERE u_email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
                   $result = $mysqli->query($sql);
    
                   $user = $result->fetch_assoc();
                   var_dump($user);
    
    if ($user) {
        
        if ($_POST["password"] === $user["u_password"]) {
            
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>The ArtHouse Tix</title>
    <link rel="icon" type="image/x-icon" href="/public/favicon.ico">
    <script src="https://kit.fontawesome.com/f04dcfa3ef.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="form_box">
            <h1 id="title">Log In</h1>
            <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>
            <form method="post">  
            <div class="input-group">
            <div class="input_field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email"required>
                    </div>
                    <div class="input_field">
                        <i class="fa-regular fa-key"></i>
                        <input type="password" placeholder="Password" name="password" required>
                    </div>
            <p>Don't have an account? <a href="/index.html">Sign up!</a></p>
                </div>
            <div class="btn-field">
            <button type="submit"  name="login" class="disable" id="signinbtn">Log In</button>
            </div>
            </form>
        </div>
    </div>
</body>
</html>