<?php session_start(); ?>

<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <meta charset="UTF">
        <title>HappyDays</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--creates the header with the links-->
        <div class="header">
            <a href="index.php" class="sitename">HappyDays</a>

            <div class="nav-links">
                <?php if (!isset($_SESSION['username'])): ?>
                    <a href="pages/login.php">login</a> <span>|</span>
                    <a href="pages/register-account.php">register account</a> <span>|</span>
                <?php else: ?>
                    Welcome, <?= htmlspecialchars($_SESSION['username']) ?> <span>|</span>
                    <a href="pages/create-post.php">create post</a> <span>|</span>
                    <a href="php/logout.php">log out</a> <span>|</span>
                <?php endif; ?>

                <a href="pages/happy-words.php">happy words</a> <span>|</span>
                <a href="pages/have-a-laugh.php">have a laugh</a> <span>|</span>
                <a href="pages/about.php">about</a>
            </div>
        </div>


        <!--creates the calendar header: month, year, and navigation buttons-->
        <div class="calendar">
                    <button id="prev">Previous</button>
                    <h2 id="month-year">Month Year</h2>
                    <button id="next">Next</button>
                <!--grid for weekday labels and day numbers-->
                <div class="calendar-grid">

                    <!--labels for the weekdays-->
                    <div class="weekdays">
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                        <div>Sun</div>
                    </div>

                <!--this will be filled with day numbers using javaScript-->
                <div class="days" id="calendar-days"></div>
            </div>
        </div>
        <!--loads the javascript file for functionality-->
        <script src="js/calendar.js"></script>
    </body>
</html>