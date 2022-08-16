<?php
session_start();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MANAO</title>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">  
        <script type="module" src="validate.js"></script>
    </head>
    <body>  
        <form method="post" id="reg_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            <?php
            if (isset($_COOKIE['login_cookies']) && isset($_SESSION['login_session'])) {
                echo "<h4> Hello," . $_COOKIE['login_cookies'] . "!!!</h4> <p>- это куки</p> ";
                echo "<h4> Hello," . $_SESSION['login_session'] . "!!!</h4> - это сессии <br>";
            } else {
                echo "<h1>Hello, guest</h1><br>";
                echo "<br>";
            }
            ?>
            <h4>Registration form</h4>  
            <input required class="input-group mb-3" type="text" class="form-control"
                   placeholder="Login" name ='login' id="login"
                   aria-label="Login" aria-describedby="basic-addon1"> 
            <span id="loginErr"></span>
            <br><br>
            <input required class="input-group mb-3" type="password" class="form-control" 
                   placeholder="Password" name ='password' id="password"
                   aria-label="Password" aria-describedby="basic-addon2">
            <span id="passwordErr"></span>
            <br><br>              
            <input required class="input-group mb-3" type="password" class="form-control" 
                   placeholder="Confirm_password " id="confirm_password"
                   name='confirm_password' 
                   aria-label="Confirm_password" aria-describedby="basic-addon2">  
            <span id="confirmPasswordErr"></span>
            <br><br>  
            <input required class="input-group mb-3" type="emai" class="form-control" placeholder="Email" 
                   name ='email' id ="email"
                   aria-label="Email" aria-describedby="basic-addon2">  
            <span id="emailErr"></span>            
            <br><br> 
            <input required class="input-group mb-3" type="text" class="form-control" placeholder="Name" 
                   name='name' id ="name"
                   aria-label="Name" aria-describedby="basic-addon2">  
            <span id="nameErr"></span>
            <br><br>
            <input type="button" id="btn" value="Отправить" />
            <div id="result_reg_form"></div> 
        </form>
        <br>
    </body>
</html>