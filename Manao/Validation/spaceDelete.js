
export function spaceDelete(array) {
    let arr = [];
    array.map(item => {
        if (item !== " ") {
            arr.push(item);
        }
    });
    return arr;
}


