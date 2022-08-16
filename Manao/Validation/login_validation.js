import {spaceDelete} from './spaceDelete';

export function login_validation(val) {
    let pattern_login = /^[a-zA-Z0-9]+$/;
    let data = val.trim();
    data = data.split('');
    data = spaceDelete(data).join('');
    let loginError = document.getElementById("loginErr");
    if (!data.length) {
        loginError.textContent = '*Login is required*';
    } else if (data.length >= 6) {
        if (pattern_login.test(data)) {
            let log = document.getElementById("login");
            log.value = data;
            return true;
        }
    } else if (data.length >= 6) {
        if (!pattern_login.test(data)) {
            loginError.textContent = 'Login required only numbers and letters';
        }
    } else if (data.length < 6) {
        loginError.textContent = 'Login length required more then 6 letters';
    }
}