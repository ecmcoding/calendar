<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Happy Words</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <a href="../index.php" class="sitename">HappyDays</a> 

        <div class="nav-links">
                <?php if (!isset($_SESSION['username'])): ?>
                    <a href="login.html">login</a> <span>|</span>
                    <a href="register-account.html">register account</a> <span>|</span>
                <?php else: ?>
                    Welcome, <?= htmlspecialchars($_SESSION['username']) ?> <span>|</span>
                    <a href="create-post.php">create post</a> <span>|</span>
                    <a href="logout.php">log out</a> <span>|</span>
                <?php endif; ?>

                <a href="have-a-laugh.php">have a laugh</a> <span>|</span>
                <a href="about.html">about</a>
            </div>
    </div>

    <div class="main-content">
        <div class="prompt">...</div>

        <div class="text-box" id="quoteBox">
            Loading quote...
        </div>

        <button onclick="getPositiveQuote()" class="post-btn">New Quote</button>

        <div class="api-credit">
            Powered by <a href="https://zenquotes.io/" target="_blank">ZenQuotes API</a>
        </div>
    </div>

    <script src="../js/happy-words.js"></script>
</body>
</html>
