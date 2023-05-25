<?php
    setcookie("name", "Valdas Adamkus", time()+3600, "/","", 0); 
    setcookie("age", "92", time()+3600, "/", "", 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE["name"])) {
            echo 'Welcome, ' . $_COOKIE["name"] . '<br>';
            echo 'You are ' . $_COOKIE["age"] . ' years old.';
        }
        else {
            echo "Who are you?";
        }
    ?>
</body>
</html>