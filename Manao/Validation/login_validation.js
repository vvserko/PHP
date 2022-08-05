export function login_validation(val) {
    let pattern_login = /^[a-zA-Z0-9]+$/;
    let data = val.trim();
    data = data.replace(' ', '');
    let loginError = document.getElementById("loginErr");        
    if (!data.length) {
        loginError.textContent = '*Login is required*';
        //return false;
    } else if (data.length >= 6) {
        if (pattern_login.test(data)) {
            return true;
        }
    } else if (data.length >= 6) {
        if (!pattern_login.test(data)) {
            loginError.textContent = 'Login required only numbers and letters';
            //return false;
        }
    } else if (data.length < 6) {
        loginError.textContent = 'Login length required more then 6 letters';
        //return false;
    }
}