<!DOCTYPE html>
<html>
<head>
<title>METANIT.COM</title>
<meta charset="utf-8" />
</head>
<body>
<h3>Добавление пользователя</h3>
<form action="create.php" method="post">
    <p>ID:
    <input type="text" name="id" /></p>
    <p>Имя:
    <input type="text" name="username" /></p>
    <p>Возраст:
    <input type="text" name="surname" /></p>
    <input type="date" name="date" />
    <br/>
    <label>MEN<label/>
    <input type="radio" name="gender" value='1'/>
    <br/>
    <label>WOMEN<label/>
    <input type="radio" name="gender" value='0'/>
    <br/>
    <label>CITY<label/>
     <input type="text" name="city"/>
    <br/>
    <input type="submit" value="Добавить">
</form>

<form action="delete.php" method="post">
    <p>ID:
    <input type="text" name="id" /></p>    
    <br/>
    <input type="submit" value="Удалить">
</form>
</body>
</html>




