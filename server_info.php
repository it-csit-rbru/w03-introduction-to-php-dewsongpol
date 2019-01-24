<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
   <?php
        echo $_SERVER["HTTP_USER_AGENT"]."<br>";
        echo $_SERVER["HTTP_HOST"]."<br>";
        echo $_SERVER["HTTP_ADDR"]."<br>";
    ?>
</body>
</html>