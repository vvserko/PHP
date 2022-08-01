<!DOCTYPE html>
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
        <script src="get_user.js"></script>
    </head>

    <body> 
        <form method="post" id="auth_user_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" >   
            <h4>Autorization form</h4>
            <input class="input-group mb-3" type="text" class="form-control" placeholder="NAME" name='auth_name'
                   aria-label="Username" aria-describedby="basic-addon1">            
            <br><br>
            <input class="input-group mb-3" type="password" class="form-control" placeholder="Password" name='auth_password'
                   aria-label="Password" aria-describedby="basic-addon2">             
            <br><br>  
            <input type="button" id="btn_get_user" value="Отправить" />
            <div id="result_auth_user">Ответ:</div> 
        </form>     
        <br/>
        
    </body>
</html>