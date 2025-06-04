<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<h2>Message Received!</h2>";
        echo "<p><strong>Name:</strong> $name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Message:</strong> $message</p>";
    } else {
        echo "<h2>Error: All fields are required!</h2>";
    }
} else {
    echo "<h2>Invalid Request</h2>";
}
?>
