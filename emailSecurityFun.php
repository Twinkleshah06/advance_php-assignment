<!-- Write a function that sanitizes email input and validates it before sending -->

<?php

function sendEmail($email, $subject, $message) {
    // Sanitize email input
    $sanitizedEmail = filter_var(trim($email), FILTER_SANITIZE_EMAIL);

    // Validate email format
    if (!filter_var($sanitizedEmail, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email address.");
    }

    // Send email (Simulation)
    echo "Email sent to: $sanitizedEmail<br>";
    echo "Subject: $subject<br>";
    echo "Message: $message<br>";

    // Uncomment the following line for actual email sending (requires server configuration)
    // mail($sanitizedEmail, $subject, $message);
}

// Example usage
sendEmail(" test@example.com ", "Welcome!", "Thank you for signing up!");

?>