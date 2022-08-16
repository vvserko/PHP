import {spaceDelete} from './spaceDelete';

export function email_validation(eml) {
    let pattern_email = /^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/;
    let data = eml.trim();
    data = data.split('');
    data = spaceDelete(data).join('');    
    let emailError = document.getElementById("emailErr");
    if (!data.length) {
        emailError.textContent = '*Email is required*';
    } else if (pattern_email.test(data)) {
        let eml = document.getElementById("email");
        eml.value = data;
        return true;
    } else {
        emailError.textContent = 'Email is not valid';
        return false;
    }
}




