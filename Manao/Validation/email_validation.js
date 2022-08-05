export function email_validation(eml) {
    let pattern_email = /^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/;
    let data_email = eml.trim();
    data_email = data_email.replace(' ', '');
    let emailError = document.getElementById("emailErr");
    if (data_email.length == 0) {
        emailError.textContent = '*Email is required*';
    } else if (pattern_email.test(data_email)) {
        return true;
    } else {
        
        emailError.textContent='Email is not valid';
        return false;
    }
}




