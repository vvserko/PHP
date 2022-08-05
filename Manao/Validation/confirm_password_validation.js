export function confirm_password_validation(val_pass, val_confirm_pass) {
    let confirm_value = val_confirm_pass;
    let value = val_pass;
    let confirmPasswordErr = document.getElementById("confirmPasswordErr");
    if (confirm_value.length == 0) {
        confirmPasswordErr.textContent = '*Confirm password is required*';
    } else if (confirm_value == value) {
        return true;
    } else {
        confirmPasswordErr.textContent = 'Passwords do not match';
    }
}


