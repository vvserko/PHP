<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=cp1251" />
        <title></title>
        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">

        <!-- Только CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
              rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
              crossorigin="anonymous">
        <link href="./style.css" rel="stylesheet">  
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    </head>
    <body>
        <script src="./ajax.js"></script>
       
        <form action="" method="post" id='reg_form'>
            <h4>Registration form</h4>
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Login" name ='login'
                   aria-label="Login" aria-describedby="basic-addon1">
            <span >
                <?php
                require_once './validation/login_validation.php';
                echo $result;
                ?>
            </span>
            <br><br>

            <input class="input-group mb-3" type="password" class="form-control" placeholder="Password" name ='password' 
                   aria-label="Password" aria-describedby="basic-addon2"> 

            <span>
                <?php
                require_once './validation/password_validation.php';
                echo $result;
                ?>
            </span>            

            <br><br>              
            <input class="input-group mb-3" type="password" class="form-control" placeholder="Confirm_password " name='confirm_password'
                   aria-label="Confirm_password" aria-describedby="basic-addon2">
            <span>
                <?php
                require './validation/confirm_password_validation.php';
                echo $result;
                ?>
            </span> 
            <br><br>  

            <input class="input-group mb-3" type="emai" class="form-control" placeholder="Email" name ='email'
                   aria-label="Email" aria-describedby="basic-addon2">  
            <span>
                <?php
                require './validation/email_validation.php';
                echo $result;
                ?>
            </span> 
            <br><br> 

            <input class="input-group mb-3" type="text" class="form-control" placeholder="Name"  name='name'
                   aria-label="Name" aria-describedby="basic-addon2">
            <span>
                <?php
                require './validation/name_validation.php';
                echo $result;
                ?>
            </span>
            <br><br>

            <button  type="submit" id="btn" >Submit registration form</button>
        </form>

        <br/>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" id='auth_form'>
            <h4>Autorization form</h4>
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Login" name='auth_login'
                   aria-label="Username" aria-describedby="basic-addon1">
            <span>
                <?php
                require './validation/auth_login_validation.php';
                echo $result;
                ?>
            </span>
            <br><br>

            <input class="input-group mb-3" type="password" class="form-control" placeholder="Password" name='auth_password'
                   aria-label="Password" aria-describedby="basic-addon2">  
            <span>
                <?php
                require './validation/auth_password_validation.php';
                echo $result;
                ?>
            </span>
            <br><br>

            <button  type="submit" >Enter</button>
        </form>
        <br>
        <div id="res_form"></div>        

    </body
</html>
