<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Coding Exercise: HTML Injection</title>
</head>
<body>
    <h1>Welcome to our secure website!</h1>

    <form method="post" action="">
        <label for="user_input">Enter your name:</label>
        <input type="text" name="user_input" id="user_input">
        <input type="submit" value="Submit">
    </form>

    <p>
        <?php
            $userInput = $_POST['user_input'] ?? '';
            
            if (!preg_match('/^[a-zA-Z0-9]+$/', $userInput)) {
                $userInput = 'Invalid input';
            }
            $userInput = htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');

            echo '<span>' . $userInput . '</span>';
        ?>
    </p>

    <p>Explore our secure content and services.</p>
</body>
</html>
