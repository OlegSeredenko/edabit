/*сделать программу, которая принимает с клавиатуры число, нужно получить все простых числа не считая единицы до этого числа
*/

function allDivisors(a) {
    let arr = [];
    let sum = 0;
    for (let i = 2; i <= a; i++) {
        let count = 0;
        for (let j = 2; j <= i; j++) {
            if (i % j == 0) {
                count = count + 1;
            }
        }
        if (count == 1) {
            arr.push(i);
            sum = sum + i;
        }
    }
    let l = arr.length;
    console.log('полученный массив простых чисел ' + arr + ' количество простых чисел ' + l + ' сумма простых чисел ' + sum);
}

