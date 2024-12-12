<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Session example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>PHP Session example</h1>
    </header>
    <main>
        <!-- Check if the session variable is set -->
        <?php if (isset($_SESSION['usrName'])): ?>
            <p>Hi, <?=htmlentities($_SESSION['usrName']) ?>. I still remember you, but now I am going to destroy the session.</p>
            <p><a href="createSession.php">Back to previous page</a></p>
            <?php
                // Destroy the session
                unset($_SESSION['usrName']);
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time() - 86400, '/');
                }
                session_destroy();
            ?>
        <?php else: ?>
            I am afraid I do not know you. <a href="index.php">Please log in</a>
        <?php endif; ?>
    </main>
    <footer>
        <p>Adapted from the book <em>PHP 7 Solutions: Dynamic Web Design Made Easy</em>, 4th edition, by David Powers</p>
    </footer>
</body>
</html>