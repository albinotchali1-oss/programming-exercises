<?php 
    print_r($_GET);
    print_r($_POST);
    /*
    $firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
    if (!empty($firstName) && !empty($lastName)) {
        echo $firstName;
        echo $lastName;
    }else {
        echo "Missing required data.";
    }
    */

    if (isset($_GET['first']) && isset($_GET['last'])) {
        $firstName = $_GET['first'];
        $lastName = $_GET['last'];
        if (!empty($firstName) && !empty($lastName)) {
            echo htmlspecialchars($firstName);
            echo htmlspecialchars($lastName); 
        } else {
            echo "Missing required data.";
        }
    }else {
        echo "Not set";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Methods</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Web Form Processor</h1>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="get">
        <div id="first">
            <label for="first">First Name :</label>
            <input type="text" name="first" autocomplite="off">
        </div>
        <div id="last">
            <label for="last">Last Name :</label>
            <input type="text" name="last" autocomplite="off">
        </div>
        <div class="buttons">
            <button type="submit">Submit</button>
            <button type="submit" formmethod="post">Submit using post</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>