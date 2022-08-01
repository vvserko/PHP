<!DOCTYPE html>
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
        <script src="validate.js"></script>


    </head>

    <body>  
        <form method="post" id="reg_form" action="" >
            <h4>Registration form</h4>  
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Login" name ='login' id="login"
                   aria-label="Login" aria-describedby="basic-addon1"> 
            <span id="loginErr"></span>
            <br><br>
            <input class="input-group mb-3" type="password" class="form-control" placeholder="Password" name ='password' 
                   aria-label="Password" aria-describedby="basic-addon2">  
            <br><br>              
            <input class="input-group mb-3" type="password" class="form-control" placeholder="Confirm_password " name='confirm_password'
                   aria-label="Confirm_password" aria-describedby="basic-addon2">            
            <br><br>  
            <input class="input-group mb-3" type="emai" class="form-control" placeholder="Email" name ='email'
                   aria-label="Email" aria-describedby="basic-addon2">              
            <br><br> 
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Name"  name='name'
                   aria-label="Name" aria-describedby="basic-addon2">            
            <br><br>
            <input type="button" id="btn" value="Отправить" />
            <div id="result_reg_form"></div> 
        </form>
        
        <br>

    </body>
</html>