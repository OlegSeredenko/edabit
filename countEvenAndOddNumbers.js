/*на вход подается 7 чисел от пользователя, неободимо вывести количесвто положительных чисел
*/

let count_even = 0;
let count_odd = 0;
for (let i = 0; i < 10; i++) {
    let num = prompt('Введите число ');
    num = Number(num);
    if (num % 2 == 0) {
        count_even = count_even + 1;
    } else if (num % 2 != 0) {
        count_odd = count_odd + 1;
    }
}
console.log('Четных чисел ' + count_even);
console.log('Нечетных чисел ' + count_odd);