<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Store the email address in a database or send it to your email marketing service.
    
    // Redirect to a thank you page or return a success message.
    header("Location: thank_you.html");
    exit;
}
?>
