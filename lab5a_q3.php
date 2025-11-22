<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 6;
        $height = 5;
        $area = calculateArea($width, $height);

        echo "The area of a rectangle with a width of $width and $height is $area";
    ?>
</body>
</html>
