/*на вход подается число (допустим x), значит функция должа получить от пользователя такое количесвто чисел. Необходимо узнать, сколько из этих чисел явялются простыми
*/

function sumpleNumber(a) {
    let count = 0;
    for (let i = 2; i < a; i++) {
        if (a % i == 0) {
            count = count + 1;
        }
    }
    if (count == 0) {
        return true;
    }
}


function findSum()
{   
    let countNumbers = prompt('Сколько чисел будет в массиве? ');
    let arr = [];
    for (let i = 0; i < countNumbers; i++) {
        arr[i] = Number(prompt('Введите число '));
    }
    let sum = 0;
    for (let j = 0; j < countNumbers; j++) {
        let x = sumpleNumber(arr[j]);
        if (x == true) {
            sum = sum + 1;
        }
    }
    return ("в массиве " + arr + " количество простых чисел равно " + sum);
}
