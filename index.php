<?php
    // Thomas Kerley
    // Spring 2024
    // INF 653 Backend Web Development

    // set default values of variables for init page load
    if (!isset($first_name)) {$first_name = '';}
    if (!isset($last_name)) {$last_name = '';}
    if (!isset($age)) {$age = '';};

    $full_name = $first_name.' '. $last_name;
    $date = date("d/m/y");
?>
<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Get Parameters</title>
        <link href="./bootstrap.css" rel="stylesheet">
    </head>
    <nav class="nav nav-pills justify-content-center">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="">Date: <?php echo htmlspecialchars($date); ?></a>
            </li>
    </nav>
    <body class="container text-center">
        <h2>
            Welcome!!
        </h2>
        <?php if (!empty($error_message)) { ?>
                <p><?php echo $error_message; ?></p>
        <?php } else { ?>
        <h4>
            Please Enter the below information.
        </h4>
        <?php } ?>
        <form action="./display.php" method="GET">
            <div class="mb-3">
                <label class="form-label" for="first_name">First Name</label>
                <input class="form-label" type="text" id="first_name" name="first_name" autocomplete="off" 
                    value="<?php echo htmlentities($first_name); ?>"
                    placehold="First Name"/>
                    <br>
            </div>
            <div class="mb-3">
                <label class="form-label" for="last_name">Last Name</label>
                <input class="form-label" type="text" id="last_name" name="last_name" autocomplete="off" 
                    value="<?php echo htmlspecialchars($last_name); ?>"
                    placehold="Last Name"/>
                    <br>
            </div>
            <div class="mb-3">
                <label class="form-label" for="age">Age</label>
                <input class="form-label" type="text" id="age" name="age" autocomplete="off" 
                    value="<?php echo htmlentities($age); ?>"
                    placehold="Age"/>
                    <br>
            </div>
            <div class="mb-3">
            <div id="buttons" class="mb-3">
            <label for="submit">&nbsp;</label>
                <button class="btn btn-primary" type="submit" id="submit" name="submit"/>Submit<br>
            </div>
        </form>
    </body>
</html>