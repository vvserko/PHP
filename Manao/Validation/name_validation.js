export function name_validation(val) {
    let pattern_name = /^[a-zA-Z]+$/;
    let data = val.trim();
    data = data.replace(' ', '');
    let nameError = document.getElementById("nameErr");
    if (!data.length) {
        nameError.textContent = '*Name is required*';
    } else if (data.length == 2) {
        if (pattern_name.test(data)) {
            return true;
        } else if (!pattern_name.test(data)) {
            nameError.textContent = 'Name required only letters';
        }
    } else if (data.length < 2 || data.length > 2) {
        nameError.textContent = 'Name length required only 2 letters';
    }
}
