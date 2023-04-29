/*сделать программу, которая принимает с клавиатуры число, нужно получить все простых числа не считая единицы до этого числа
*/

function allDivisors(a) {
    let arr = [];
    for (let i = 2; i < a; i++) {
        if (a % i == 0) {
            let count = 0;
            for (let j = 2; j <= i; j++) {
                if (i % j == 0) {
                    count = count + 1;
                }
            }
            if (count == 1) {
                arr.push(i);
            }
        }
    }
    console.log('для числа ' + a + ' простые делители это ' + arr);
}