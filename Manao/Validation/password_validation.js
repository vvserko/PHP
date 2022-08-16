import {spaceDelete} from './spaceDelete';

export function password_validation(val) {
    let pattern_password = /^[a-z0-9]+$/;
    let data = val.trim();
    data = data.split('');
    data = spaceDelete(data).join('');
    let passwordErr = document.getElementById("passwordErr");
    if (!data.length) {
        passwordErr.textContent = '*Password is required*';
    } else if (data.length >= 6) {
        if (pattern_password.test(data)) {
            let psw = document.getElementById("password");
            psw.value = data;
            return true;
        }
    } else if (data.length >= 6) {
        if (!pattern_password.test(data)) {
            passwordErr.textContent = 'Password requirted only numbers and letters';
        }
    } else if (data.length < 6) {
        passwordErr.textContent = 'Password length required more then 6 letters';
    }
}




