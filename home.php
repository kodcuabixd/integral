<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kolej Integral</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fafafa;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .logo {
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
            height: auto;
        }
        .welcome-message {
            font-size: 18px;
            margin-bottom: 20px;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://kolejintegral.com/wp-content/uploads/2024/05/kolejintegrallogo-1.png" alt="Kolej Integral Logo">
        </div>
        <?php
        // Check if username cookie is set
        if (isset($_COOKIE['username'])) {
            $username = $_COOKIE['username'];
            echo '<p class="welcome-message">Merhaba @' . htmlspecialchars($username) . '</p>';
            echo '<p>Çok yakında burada sizlerleyiz! Sayfamıza verdiğiniz destek için çok teşekkür ederiz.</p>';
        } else {
            
        }
        ?>
    </div>
</body>
</html>
