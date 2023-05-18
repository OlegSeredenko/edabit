/*на вход подается число (допустим x), значит функция должа получить от пользователя такое количесвто чисел. 
Необходимо узнать, суммы и количесвто отрицательных и положительных чисел, а также количесвто простых чисел
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


function findSum3()
{   
    let countNumbers = prompt('Сколько чисел будет в массиве? ');
    let arr = [];
    for (let i = 0; i < countNumbers; i++) {
        arr[i] = Number(prompt('Введите число '));
    }
    let sumNegative = 0;
    let countNegative = 0;
    let sumPositive = 0;
    let countPositive = 0;
    let countSimpleNumbers = 0;
    for (let j = 0; j < countNumbers; j++) {
        if (arr[j] < 0)  {
            sumNegative = sumNegative + arr[j];
            countNegative += 1;
        } else {
            sumPositive = sumPositive + arr[j];
            countPositive += 1;
            if (sumpleNumber(arr[j]) == true) {
                countSimpleNumbers = countSimpleNumbers + 1;
            }
        }
    }
    return (" в массиве " + arr + " отрицательных чисел " + countNegative + " их сумма равна " + sumNegative + 
    " а положительных чисел " + countPositive + " и их сумма равна " + sumPositive + " а количество простых чиел равно " + countSimpleNumbers);
}
