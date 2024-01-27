<?php
    // Thomas Kerley
    // Spring 2024
    // INF 653 Backend Web Development

    // set default values of variables for init page load
    if (!isset($first_name)) {$first_name = 'name';}
    if (!isset($last_name)) {$last_name = 'name';}
    if (!isset($age)) {$age = 'age';};

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
    <nav>
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="">Date: <?php echo htmlspecialchars($date); ?></a>
            </li>
    </nav>
    <body>
        <h2>
            Welcome!!
        </h2>
        <?php if (!empty($error_message)) { ?>
                <p><?php echo htmlspecialchars($error_message); ?></p>
        <?php } else { ?>
        <h3>
            Please Enter the below information.
        </h3>
        <?php } ?>
        <form action="./display.php" method="GET">
            <div id="data">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" autocomplete="off" 
                    value="<?php echo htmlspecialchars($first_name); ?>"/>
                    <br>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" autocomplete="off" 
                    value="<?php echo htmlspecialchars($last_name); ?>"/>
                    <br>
                <label for="age">Age</label>
                <input type="text" id="age" name="age" autocomplete="off" 
                    value="<?php echo htmlspecialchars($age); ?>"/>
                    <br>
            </div>
            <div id="buttons">
            <label for="submit">&nbsp;</label>
                <input type="submit" id="submit" name="submit"/><br>
            </div>
        </form>
    </body>
</html>