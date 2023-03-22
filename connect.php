<?php

if (empty($_POST["name"])) {
    die("Name is required");
} 
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_conf"]) {
    die("Passwords must match");
}

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO users (u_name, u_password, u_email) 
VALUES (?,?,?)";
        
        $stmt = $mysqli->stmt_init();

        if ( ! $stmt->prepare($sql)) {
            die("SQL error: " . $mysqli->error);
        }
        
        $stmt->bind_param("sss",
                          $_POST["name"],
                          $_POST["email"],
                          $_POST["password"]);
                          
        if ($stmt->execute()) {
        
            header("Location: signup_success.html");
            exit;
            
        } else {
            
            if ($mysqli->errno === 1062) {
                die("email already taken");
            } else {
                die($mysqli->error . " " . $mysqli->errno);
            }
        }
        
        