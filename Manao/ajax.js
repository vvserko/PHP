$(document).ready(function () {
    $("#btn").click(
            function () {
                sendAjaxForm('res_form', 'reg_form', 'action_ajax_form.php');
                return false;
            }
    );
});

function sendAjaxForm(res_form, reg_form, url) {
    $.ajax({
        url: url, //url страницы (action_ajax_form.php)
        type: "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#" + reg_form).serialize(), // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            users = $.parseJSON(response);
            console.log(users);
           //$('#res_form').html('Login: '+user.login+'<br>Password: '+user.password);
        },
        error: function (response) { // Данные не отправлены
            $('#res_form').html('Ошибка. Данные не отправлены.');
        }
    });
}
