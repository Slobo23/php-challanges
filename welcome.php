<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-image d-flex align-content-end flex-wrap"
        style="background-image: linear-gradient(rgba(255, 255, 255, 0.55), rgba(255, 255, 255, 0.55)), url('./img/cover.jpg'); background-position: center; height: 50vh; padding: 0; opacity: 90%;">
        <a href="index.php">Back to index</a>
        <div class="row" style="background: rgba(255, 255, 255, 0.8); width: inherit; margin: 0;">
            <div class="col-12 text-center p-2">

                <?php

                $activeUser = $_GET['activeUser'] ?? '';
                $newUser = $_GET['newUser'] ?? '';

                echo "<h4>Welcome, </h4>" . "<h2>" . $activeUser . $newUser . "</h2>";
                ?>

            </div>
        </div>
    </div>
</body>

</html>