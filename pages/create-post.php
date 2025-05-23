<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create post</title>
    <link rel="stylesheet" href="../css/style.css">
    <!--gets the font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">

            <a href="../index.php" class="sitename">HappyDays</a> 

            <div class="nav-links">
                <?php if (!isset($_SESSION['username'])): ?>
                    <a href="login.php">login</a> <span>|</span>
                    <a href="register-account.php">register account</a> <span>|</span>
                <?php else: ?>
                    Welcome, <?= htmlspecialchars($_SESSION['username']) ?> <span>|</span>
                    <a href="logout.php">log out</a> <span>|</span>
                <?php endif; ?>

                <a href="happy-words.php">happy words</a> <span>|</span>
                <a href="have-a-laugh.php">have a laugh</a> <span>|</span>
                <a href="about.php">about</a>
            </div>
    </div>

    <div class="main-content">

        <div class="prompt">what good news do you wanna share?</div>

        <!--TODO: Insert php filename-->
        <form action="[Insert php file name here]" method="POST">
            <textarea placeholder="your message..." required rows="10" cols="50"></textarea>
            <div class="button-group">
                <button type="submit" class="post-btn">post</button>
                <button type="reset" class="delete-btn">delete</button>
            </div>

        </form>

    </div>

</body>
</html>