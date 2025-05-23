<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log in</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<div class="header">
            <a href="../index.php" class="sitename">HappyDays</a> 
    </div>

    <div class="form-container">
        <h2>Log in to your account</h2>

        <div id="error-messages"></div>

        <!--TODO: Insert php file-->
        <form action="[Insert php login file here]" method="POST" id="loginForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <button type="submit">Log in</button>
        </form>

        <p class="login-link">Don't have an account? <a href="register-account.php">Register here</a></p>
    </div>

    <script src="../js/validation.js"></script>
</body>
</html>