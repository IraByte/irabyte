<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Admin email address
    $admin_email = "anamikasingh5100@gmail.com";

    // User input
    $name = $_POST["cname"];
    $email = $_POST["cemail"];
    $subject = $_POST["csubject"];
    $message = $_POST["cmessage"];

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n";
    $email_content .= "Message:\n$message\n";

    // Send email
    $headers = "From: $email";
    if (mail($admin_email, $subject, $email_content, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Form</h2>
    <form method="post" >
        <label for="name">Name:</label><br>
        <input type="text" id="iraname" name="cname" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="iraemail" name="cemail" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="irasubject" name="csubject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="iramessage" name="cmessage" rows="4" required></textarea><br><br>

        <input type="submit" value="Send">
    </form>
</body>
</html> -->