$(document).ready(function () {
    $("#btn_get_user").click(
            function (e) {
                e.preventDefault();
                const login = $("#auth_login").val();
                const authLoginErr = document.getElementById("authLoginErr");
                const authPasswordErr = document.getElementById("authPasswordErr");
                const password = $("#auth_password").val();
                document.getElementById("authLoginErr").textContent = '';
                //$("#loginErr").html('');
                document.getElementById("authPasswordErr").textContent = '';
                document.getElementById("result_auth_form").textContent = '';
                //$("#passwordErr").html('');                  
                sendAjaxFormAuth('auth_form', 'getUser.php');
                return false;
            }
    );
});
function sendAjaxFormAuth(reg_form, url) {
    $.ajax({
        url: url, //url страницы (adduser.php)
        type: "POST", //метод отправки
        dataType: "json", //формат данных
        data: $("#" + reg_form).serialize(), // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            if (response === 'Pasw_incorr') {
                const authPasswordErr = document.getElementById("authPasswordErr");
                console.log(response);
                authPasswordErr.textContent = 'Password is incorrect.';
            }
            if (response === 'Lgn_pasw_incorr') {
                const authLoginErr = document.getElementById("authLoginErr");
                console.log(response);
                authLoginErr.textContent = 'Login and password is incorrect.';
            }
            if (response === 'OK') {
                const authLoginErr = document.getElementById("authLoginErr");
                console.log(response);
                console.log('Login верный Password верный');
                authLoginErr.textContent = 'Login верный Password верный.';                
                window.location.href = "http://localhost/Manao/hello_user.php";
            }
        },
        error: function (response) { // Данные не отправлены
            alert(response);
            console.log(response);
            document.getElementById("result_auth_form").textContent = 'Ошибка. Данные не отправлены.';

        }
    });
}
