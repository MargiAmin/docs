<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email information
    $to = "aminmargi19@gmail.com"; // Replace with your email address
    $subject = "New message from your website";
    $headers = "From: $name <$email>";

    // Compose email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Send email
    mail($to, $subject, $email_content, $headers);

    // Redirect back to the original page
    header("Location: index.html"); // Replace with the path to your thank you page
    exit;
}
?>
