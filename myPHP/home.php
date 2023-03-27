<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{display:flex;flex-direction:column;margin:auto 25%;}
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello this is the home page";

        include('contact.php');

        include('about.php');
    ?>
</body>
</html>
