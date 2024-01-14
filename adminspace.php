<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "admin" && $password == "admin") {
        $_SESSION["loggedin"] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Identifiants invalides";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h3> Welcome ,Admin</h3>
    <p><em>Choose an option</em></p>
    <div class="links">
            <a href="add_product.php">Add Products</a>
            <a href="delete_product.php">Delete Products</a>
            <a href="modify_product.php">show Products</a>
            <a href="login.php" >log out</a>
            

     </div>
</body>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h3 {
            color: #333;
            text-align: center;
            margin-top: 50px;
        }

        p {
            color: #666;
            text-align: center;
            margin-top: 10px;
        }

        .links {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #4070f4;
            font-weight: bold;
            margin: 0 20px;
            padding: 10px;
            border: 2px solid #4070f4;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #4070f4;
            color: #fff;
        }
    </style>
</html>