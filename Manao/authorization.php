<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MANAO</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">  
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>        
        <script type="module" src="validateGetUser.js"></script>
    </head>

    <body> 
        <form method="post" id="auth_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >   
            <h1 id = 'cookie'></h1>
            <h4>Autorization form</h4>            
            <input required class="input-group mb-3" type="text" class="form-control" placeholder="Login" 
                   name='auth_login' id="auth_login" aria-label="Username" aria-describedby="basic-addon1"> 
            <span id="authLoginErr"></span>            
            <br><br>

            <input required class="input-group mb-3" type="password" class="form-control" placeholder="Password" 
                   name='auth_password' id="auth_password" aria-label="Password" aria-describedby="basic-addon2">  
            <span id="authPasswordErr"></span>            
            <br><br> 

            <input type="button" id="btn_get_user" value="Отправить" />            
        </form> 
        <p id="result_auth_form"></p>
        <br/>        
    </body>
</html>