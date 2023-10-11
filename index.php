<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the password from the form
    $motDePasseFourni = $_POST["password"];
    
    // Perform password validation
    $resultatValidation = validerMotDePasse($motDePasseFourni);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Validation</title>
</head>
<body>
    <h1>Password Validation</h1>
    <form method="POST" action="validate_password.php"> <!-- Modify the action attribute as needed -->
        <label for="password">Enter Password:</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Display the validation result
    if (isset($resultatValidation)) {
        echo "<p>$resultatValidation</p>";
    }
    ?>
</body>
</html>
