<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coder Test Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Coder-Test</h1>
        <p>This is a minimal PHP, HTML, CSS, and JS project running in a Dev Container.</p>
        
        <div class="info-box">
            <?php
                echo "<p><strong>Current Server Time:</strong> " . date('Y-m-d H:i:s') . "</p>";
                echo "<p><strong>PHP Version:</strong> " . phpversion() . "</p>";
            ?>
        </div>

        <button id="clickMe">Click Me!</button>
        <p id="response"></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
