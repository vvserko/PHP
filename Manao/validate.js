function auth_login_validation(dat) {
    let pattern_name = "/^[a-zA-Z]{1,2}$/";
    let data = dat.trim();
    data = data.replace(' ', '');
    if (!data.length) {
        return result = '*Name is required*';
    } else if (data.length <= 2) {
        if (pattern_name.test(data)) { 
            return data;
        }
    } else {
        return 'Name is not valid';
    }
}
$(document).ready(function () {
    $("#btn").click(
            function (e) {
                e.preventDefault();
                log = $("#login").val(); 
                $("#loginErr").html(auth_login_validation(log));                
                
                sendAjaxForm('result_reg_form', 'reg_form', 'adduser.php');
                return false;
            }
    );
});

function sendAjaxForm(result_form, reg_form, url) {
    $.ajax({
        url: url, //url страницы (action_ajax_form.php)
        type: "POST", //метод отправки
        dataType: "json", //формат данных
        data: $("#" + reg_form).serialize(), // Сеарилизуем объект
        success: function (response) { //Данные отправлены успешно
            result = jQuery.parseJSON(response);
            console.log('Тип ответа - ');
            console.log(typeof (result));
            console.log('Результат - ');
            console.log(result);
            console.log('Работает');
            $("#" + result_form).html('Имя: ' + result);
        },
        error: function (response) { // Данные не отправлены
            $("#" + result_form).html('Ошибка. Данные не отправлены.');
        }
    });
}
