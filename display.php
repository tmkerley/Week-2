<?php
/*********************************************

    Thomas Kerley
    Spring 2024
    INF 653 Backend Web Development

**********************************************/

    $age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
    $date = date("d/m/y");
    $first_name = filter_input(INPUT_GET, 'first_name');
    $last_name = filter_input(INPUT_GET, 'last_name');
    $full_name = $first_name . ' ' . $last_name;

    // data validation block
    $error_message = '';

    //validate names
    if($first_name === FALSE){
        $error_message .= 'Invalid Name.<br>';
    } else if($first_name == '') {
        $error_message .= 'First name cannot be empty.<br>';
    }

    if($last_name === FALSE || $last_name == '') {
        $error_message .= 'Last name cannot be empty.<br>';
    }

    // validate age
    if($age === FALSE) {
        $error_message .= 'Age must be an interger. <br>';
    } else if ($age > 150 || $age < 0) {
        $error_message .= 'Age cannot be obscene, a.k.a. unrealistic. <br>';
    } else if ($age == '') {
        $error_message .= 'Age cannot be empty.<br>';
    }

    // if error exists, revert to index page
    if ($error_message != '') {
        include('./index.php');
        exit();
    }
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
            Voting Age
        </h2>
        <p>
            Hello, my name is <?php echo $full_name; ?>. 
            <br>
            <?php 
                if($age >= 18) {
                    echo "At " . $age . " years old, I can vote in the United States.<br>";
                    $age_eightteen =  $age * 365 - 6574;
                    echo "It has been " . $age_eightteen . " days since I was 18.";
                }
                else {
                    echo "At " . $age . " years old, I am not old enough to vote in the United States.<br>";
                    $age_eightteen = 6574 - $age * 365;
                    echo "It is " . $age_eightteen . " days until I am 18.";
                }
            ?>
            <!-- 
                add logic to convert age into days.
                add logic to show days until I am 18
            -->
        </p>
    </body>
</html>