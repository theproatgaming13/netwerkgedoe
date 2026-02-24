<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>About Us</h1>
    <p>We are a team of developers who love to make people laugh with our quirky websites!</p>
    <p>Did you know? The first computer bug was an actual bug (a moth) stuck in a relay!</p>

    <!-- PHP: Display server information -->
    <?php
    echo "<p>This server is running: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
    ?>

    <!-- PHP: Simple form submission -->
    <h2>Contact Us</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars(string: $_POST['name']);
        $message = htmlspecialchars(string: $_POST['message']);
        echo "<p>Thank you, $name! Your message has been received:</p>";
        echo "<p><em>$message</em></p>";
    }
    ?>

    <a href="index.php">Back to Home</a>
</body>
</html>