<!-- Write a PHP script to send a test email to a user using the mail() function. p-->

<?php

// Define recipient email
$to = "user@example.com";  // Replace with actual recipient email

// Email subject
$subject = "Test Email from PHP";

// Email message
$message = "Hello,\n\nThis is a test email sent using PHP's mail() function.";

// Headers (from address, content type, etc.)
$headers = "From: noreply@example.com\r\n";  // Replace with your email
$headers .= "Reply-To: support@example.com\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully to $to!";
} else {
    echo "Failed to send email.";
}

?>