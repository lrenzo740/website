<?php
// Retrieve username and password from form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate input
    if (empty($username) || empty($password)) {
        echo "Both username and password are required.";
    } else {
        // Open or create the text file for appending
        $file = fopen("users.txt", "a");

        if ($file) {
            // Write username and password to the file
            fwrite($file, "Username: $username, Password: $password\n");

            // Close the file
            fclose($file);

            echo "User data saved successfully.";
        } else {
            echo "Failed to open the file.";
        }
    }
}
?>
