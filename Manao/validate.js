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
                document.getElementById("passwordErr").textContent = '';                
                document.getElementById("confirmPasswordErr").textContent = '';                
                document.getElementById("emailErr").textContent = '';               
                document.getElementById("nameErr").textContent = '';                

                if (login_validation(login) === true
                        && password_validation(password) === true
                        && confirm_password_validation(password, confirm_password) === true
                        && email_validation(email) === true
                        && name_validation(name) === true) {
                    sendAjaxForm('reg_form', 'adduser.php');                   
                } else {
                    login_validation(login);                    
                    password_validation(password);                    
                    confirm_password_validation(password, confirm_password);                    
                    email_validation(email);  
                    return false;
                }
            }
    );
});
function sendAjaxForm(reg_form, url) {
    $.ajax({
        url: url, //url страницы (addUser.php)
        type: "POST", //метод отправки
        dataType: "json", //формат данных
        data: $("#" + reg_form).serialize(), // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            if (response === 'Login is exist. Enter another login.') {                
                document.getElementById("loginErr").textContent = 'Login is exist. Enter another login.';
            } else if (response === 'Email is exist. Enter another email.') {                
                document.getElementById("emailErr").textContent = 'Email is exist. Enter another email.';
            } else {                 
                console.log(response);    
                window.location.href = "http://localhost/Manao/hello_user.php";
            }
        },
        error: function (response) { // Данные не отправлены
            $("#" + result_reg_form).html('Ошибка. Данные не отправлены.');
        }
    });
}
