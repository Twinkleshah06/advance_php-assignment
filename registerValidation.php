<!-- Write a registration form that validates user input (e.g., email, password) using regular expressions before submission. -->

<?php
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Validate Name (Only letters & spaces allowed)
    if (empty($_POST["name"])) {
        $nameErr = " Name is required.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/", $_POST["name"])) {
        $nameErr = " Name can only contain letters and spaces.";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Validate Email (Standard format)
    if (empty($_POST["email"])) {
        $emailErr = " Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = " Invalid email format.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Validate Password (8+ chars, uppercase, lowercase, number, special char)
    if (empty($_POST["password"])) {
        $passwordErr = " Password is required.";
    } elseif (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $_POST["password"])) {
        $passwordErr = " Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character.";
    } else {
        $password = $_POST["password"]; // Store password securely (Hash before saving in DB)
    }

    // If all fields are valid, proceed with further processing (e.g., save to DB)
    if (empty($nameErr) && empty($emailErr) && empty($passwordErr)) {
        echo "<p style='color:green;'> Registration successful!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form with Validation</title>
</head>
<body>
    <h2>Register Here</h2>
    <form method="post" action="">
        <label for="name">Full Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span style="color:red;"><?php echo $nameErr; ?></span><br><br>

        <label for="email">Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span style="color:red;"><?php echo $emailErr; ?></span><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password">
        <span style="color:red;"><?php echo $passwordErr; ?></span><br><br>

        <button type="submit">Register</button>
    </form>
</body>
</html>