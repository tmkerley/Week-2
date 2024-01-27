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
    <nav>
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="">Date: <?php echo $date; ?></a>
            </li>
    </nav>
    <body>
        <?php
            if (!empty($error_meesage)) { ?>
                <h3 class="error"><?php echo htmlspecialchars($error_meesage); ?> </p>
        <?php } ?>
        <h2>
            Welcome!!
        </h2>
        <form action="display.php" method="POST">
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>"/><br>
            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>"/><br>
            <label>Age</label>
            <input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>"/><br>
            <label>Submit</label>
            <a href="./display.php"><input type="submit" name="submit"/></a><br>
        </form>
    </body>
</html>