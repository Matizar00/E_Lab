<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>LOGIN PAGE</title>
</head>

<body>
<div class="container">
    <div class="logo">
        <img src="public/img/logo.png">
    </div>
    <div class="login-container">
        <form class="login" action="login" method="POST">
        <h3> Welcome! </h3><br>
        <h4> Sign in to EnglishLab</h4><br>
            <div class="messages">
                <?php
                if(isset($messages)){
                    foreach($messages as $message) {
                        echo $message;
                    }
                }
                ?>
            </div>
            <input name="email" type="text" placeholder="email@email.com">
            <input name="password" type="password" placeholder="password">
            <button type="submit">LOGIN</button>
            <p style="color: #ababab">
          Don't have an Account?
          <a href="register" style="color: #28874d; font-weight: bold">Register</a>
        </p>
        </form>
    </div>
</div>
</body>