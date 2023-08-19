<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Directory Listing</title>
  <link rel="stylesheet" href="https://news478.000webhostapp.com/second_portfolio/css/background.css"> <!-- Include the CSS file -->
</head>
<body>
  <div class="container">
    <?php
    // Define the correct password
    $correctPassword = 'admin';

    // Check if the "p" parameter is set to "x" and a password is provided
    if (isset($_GET['p']) && $_GET['p'] === 'x' && isset($_POST['password'])) {
        $enteredPassword = $_POST['password'];

        if ($enteredPassword === $correctPassword) {
            // Show directory listing
            $directory = '.';
            $files = scandir($directory);

            echo "<h2>Directory Listing:</h2>";
            echo "<ul>";
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    echo "<li><a href='$file'>$file</a></li>";
                }
            }
            echo "</ul>";
        } else {
            // Show error message for wrong password
            echo "<p>Wrong password given. Please try again.</p>";
            echo "<form method='post' action='index.php?p=x'>";
            echo "Enter the password: <input type='password' name='password'>";
            echo "<input type='submit' value='Submit'>";
            echo "</form>";
        }
    } else {
        // Show password input form
        echo "<form method='post' action='index.php?p=x'>";
        echo "Enter the password: <input type='password' name='password'>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    }
    ?>
  </div>
</body>
</html>
