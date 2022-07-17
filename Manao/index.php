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
    </head>
    <body>
        

        <form action="user.php" method="post" id='reg_form'>
            <h4>Registration form</h4>
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Login" name ='login'
                   aria-label="Username" aria-describedby="basic-addon1">
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Password" name ='password' 
                   aria-label="Password" aria-describedby="basic-addon2">                
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Confirm_password " name='confirm_password'
                   aria-label="Confirm_password" aria-describedby="basic-addon2">                
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Email" name =' email'
                   aria-label="Email" aria-describedby="basic-addon2">                
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Name"  name='name'
                   aria-label="Name" aria-describedby="basic-addon2"> 
            <button  type="submit" >Submit registration form</button>
        </form>

        <br/>
        <form action="user.php" method="post" id='auth_form'>
            <h4>Autorization form</h4>
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Login" name='login'
                   aria-label="Username" aria-describedby="basic-addon1">
            <input class="input-group mb-3" type="text" class="form-control" placeholder="Password" name='password'
                   aria-label="Password" aria-describedby="basic-addon2">           

            <button  type="submit" >Enter</button>
        </form>

    </body
</html>
