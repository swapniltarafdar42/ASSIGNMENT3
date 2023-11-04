<?php
$host = 'localhost';
$dbname = 'my_db';
$user = 'username';
$password = 'password';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["name"]) && !empty($_POST["email"])) {

        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

        $sql = "INSERT INTO users (name, email) VALUES (?, ?)";

        if($stmt = $conn->prepare($sql)){
            $stmt->bind_param("ss", $name, $email);

            if ($stmt->execute()) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();

    } else {
        echo "Name and Email are required!";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<body>

<h2>Form</h2>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Name: <input type="text" name="name">
    <br>
    E-mail: <input type="text" name="email">
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>