<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            text-align: center;
        }

        h3 {
            color: #333;
        }

        h3 + p {
            color: #555;
        }

        pre {
            background-color: #f8f8f8;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    $numbers = array(2, 4, 6, 8, 10);

    echo "<h3>First Element:</h3>";
    echo "<p>First element of the array: " . $numbers[0] . "</p>";

    echo "<h3>Last Element:</h3>";
    echo "<p>Last element of the array: " . end($numbers) . "</p>";

    $numbers[] = 12;

    echo "<h3>Updated Array:</h3>";
    echo "<pre>";
    print_r($numbers);
    echo "</pre>";

    $sum = array_sum($numbers);
    echo "<h3>Array Sum:</h3>";
    echo "<p>Sum of all elements in the array: " . $sum . "</p>";

    ?>
</body>
</html>
