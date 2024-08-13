<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usn = mysqli_real_escape_string($conn, $_POST['usn']);
    $password = md5($_POST['password']);

    $select = "SELECT * FROM user_form WHERE usn = '$usn' AND password = '$password'";
    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid USN or password!";
    }
}

$conn->close();
?>
