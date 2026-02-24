<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to the Funny Website!</h1>
    <p>Why don't scientists trust atoms? Because they make up everything!</p>
    <img src="https://media.giphy.com/media/3o7TKSjRrfIPjeiVyM/giphy.gif" alt="Funny GIF">

    <!-- PHP: Display current date -->
    <?php
    echo "<p>Today is: " . date(format: "l, F jS, Y") . "</p>";
    ?>

    <!-- PHP: Random joke generator -->
    <?php
    $jokes = [
        "Why don't skeletons fight each other? They don't have the guts.",
        "Why did the scarecrow win an award? Because he was outstanding in his field!",
        "Why don't eggs tell jokes? They might crack up!",
        "What do you call fake spaghetti? An impasta!",
    ];
    $randomJoke = $jokes[array_rand(array: $jokes)];
    echo "<p>Here's a random joke for you: <strong>$randomJoke</strong></p>";
    ?>

    <a href="about.php">About Us</a>
</body>
</html>