<?php

// Initiate the session
session_start();

// Check that the form has been submitted and that the name has been filled
$userName = trim($_POST['userName'] ?? '');
if ($userName !== '') {
    $_SESSION['usrName'] = $_POST['userName'];
}

?>
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
            <p>Hello, <?=htmlentities($_SESSION['usrName']) ?>. Your session variable is set.</p>
            <p><a href="enterSession.php">Continue</a></p>
        <?php else: ?>
            <p>Who are you? <a href="index.php">Please log in</a></p>
        <?php endif; ?>
    </main>
    <footer>
        <p>Adapted from the book <em>PHP 7 Solutions: Dynamic Web Design Made Easy</em>, 4th edition, by David Powers</p>
    </footer>
</body>
</html>