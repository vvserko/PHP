export default function auth_login_validation(data) {
    let pattern_name = "/^[a-zA-Z]{1,2}$/";
    let data = trim(data);
    let data = str_replace(' ', '', data);
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
