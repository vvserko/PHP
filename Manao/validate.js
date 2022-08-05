import {login_validation} from './Validation/login_validation';
import {password_validation} from './Validation/password_validation';
import {confirm_password_validation} from './Validation/confirm_password_validation';
import {email_validation} from './Validation/email_validation';
import {name_validation} from './Validation/name_validation';

$(document).ready(function () {
    $("#btn").click(
            function (e) {
                e.preventDefault();
                let login = $("#login").val();
                let password = $("#password").val();
                let confirm_password = $("#confirm_password").val();
                let email = $("#email").val();
                let name = $("#name").val();

                document.getElementById("loginErr").textContent = '';
                //$("#loginErr").html('');
                document.getElementById("passwordErr").textContent = '';
                //$("#passwordErr").html('');
                document.getElementById("confirmPasswordErr").textContent = '';
                //$("#confirmPasswordErr").html('');
                document.getElementById("emailErr").textContent = '';
                //$("#emailErr").html('');
                document.getElementById("nameErr").textContent = '';
                //$("#nameErr").html('');

                if (login_validation(login) === true
                        && password_validation(password) === true
                        && confirm_password_validation(password, confirm_password) === true
                        && email_validation(email) === true
                        && name_validation(name) === true) {
                    sendAjaxForm('reg_form', 'adduser.php');
                } else {
                    login_validation(login);
                    //$("#loginErr").html(login_validation(login));
                    password_validation(password);
                    //$("#passwordErr").html(password_validation(password));
                    confirm_password_validation(password, confirm_password);
                    //$("#confirmPasswordErr").html(confirm_password_validation(password, confirm_password));
                    email_validation(email);
                    //$("#emailErr").html(email_validation(email));

                    return false;
                }
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
            if (response === 'Login is exist. Enter another login.') {
                console.log(response);
                document.getElementById("loginErr").textContent = 'Login is exist. Enter another login.';
            } else if (response === 'Email is exist. Enter another email.') {
                console.log(response);
                document.getElementById("emailErr").textContent = 'Email is exist. Enter another email.';
            } else {
                console.log(response);
                //response.forEach(user => {
                //    $("#" + result_form).append('Имя: ' + user.userLogin);
                // });   
            }
        },
        error: function (response) { // Данные не отправлены
            //$("#" + result_form).html('Ошибка. Данные не отправлены.');
        }
    });
}
