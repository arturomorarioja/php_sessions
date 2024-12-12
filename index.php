<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        Example adapted from the book PHP 7 Solutions: Dynamic Web Design Made Easy, 4th edition, by David Powers
    -->
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
        <form id="frmName" action="createSession.php" method="POST">
            <div>
                <label for="txtName">Please enter your name:</label>
                <input type="text" id="txtName" name="userName" required><br>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
    </main>
    <footer>
        <p>Adapted from the book <em>PHP 7 Solutions: Dynamic Web Design Made Easy</em>, 4th edition, by David Powers</p>
    </footer>
</body>
</html>