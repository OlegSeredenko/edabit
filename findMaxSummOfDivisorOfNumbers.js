/*сделать программу, которая принимает с клавиатуры два числа (первое меньше второго), и находит число с максимальной суммой всех делителей
*/

function allDivisors(a, b) {
    let sum = 0;
    let resultSum = 0;
    let resultNumber = 0;
    let arr = [];
    for (let i = a; i <= b; i++) {
        for (let j = 1; j <= i; j++) {
            if (i  % j == 0) {
                sum = sum + j;
            }
        }
        if (sum > resultSum) {
            resultNumber = i;
            resultSum = sum;
        }
        sum = 0;
    }
    console.log('число ' + resultNumber + ' имеет самую большую сумму делителей ' + resultSum);
}

