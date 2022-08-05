$(document).ready(function () {
    $("#btn").click(
            function (e) {
                e.preventDefault();
                let login = $("#auth_login").val();
                let password = $("#auth_password").val();
                document.getElementById("authLoginErr").textContent = '';
                //$("#loginErr").html('');
                document.getElementById("authPasswordErr").textContent = '';
                //$("#passwordErr").html('');                  
                sendAjaxForm('auth_form', 'getUser.php');
                return false;
            }
    );
});
function sendAjaxForm(reg_form, url) {
    $.ajax({
        url: url, //url страницы (adduser.php)
        type: "POST", //метод отправки
        dataType: "json", //формат данных
        data: $("#" + reg_form).serialize(), // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            if (response === 'Login and password is incorrect.') {
                console.log(response);
                document.getElementById("authLoginErr").textContent = 'Login and password is incorrect.';
            } else if (response === 'Password is incorrect.') {
                console.log(response);
                document.getElementById("authPasswordErr").textContent = 'Password is incorrect.';
            } else if (response === 'Login is incorrect.'){
                console.log(response);
                document.getElementById("authLoginErr").textContent = 'Login is incorrect.';
                //response.forEach(user => {
                //    $("#" + result_form).append('Имя: ' + user.userLogin);
                // });   
            } else {
                console.log(response);
                console.log('Пользователь зарегистрирован');
            }
        },
        error: function (response) { // Данные не отправлены
            //$("#" + result_form).html('Ошибка. Данные не отправлены.');
        }
    });
}
