<?php
function countVowels($inputString) {
    $inputString = preg_replace("/[^a-zA-Z]/", "", $inputString);
    $inputString = strtolower($inputString);
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;

    for ($i = 0; $i < strlen($inputString); $i++) {
        if (in_array($inputString[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = $_POST["input_string"];
    $vowelCount = countVowels($inputString);
    $resultMessage = "Number of vowels in the input string: " . $vowelCount;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Vowels</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        form {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Count Vowels in a String</h1>
    <form method="post" action="">
        <label for="input_string">Enter a string:</label>
        <input type="text" name="input_string" id="input_string" required>
        <button type="submit">Count Vowels</button>
    </form>

    <?php if (isset($resultMessage)) : ?>
        <p><?php echo $resultMessage; ?></p>
    <?php endif; ?>
</body>
</html>
