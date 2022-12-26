<!DOCTYPE html>
<html>
<head>
  <style>
    #login-form {
      width: 300px;
      margin: auto;
      text-align: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    #login-form input[type="submit"] {
      width: 100%;
      padding: 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <form id="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="username">Login :</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Mot de passe :</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Se connecter">
  </form> 

  <div id="error-message"></div>
  <div id="welcome-message"></div>
</body>
</html>
<script>
  const form = document.getElementById("login-form");
  form.addEventListener("submit", function(event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username !== "Julien") {
      document.getElementById("error-message").innerHTML = "Le login est inconnu.";
      document.getElementById("welcome-message").innerHTML = "";
    } else if (password !== "1234") {
      document.getElementById("error-message").innerHTML = "Le mot de passe est incorrect.";
      document.getElementById("welcome-message").innerHTML = "";
    } else {
      form.style.display = "none";
      document.getElementById("error-message").innerHTML = "";
      document.getElementById("welcome-message").innerHTML = "Bienvenue Julien !";
    }
  });
</script>
