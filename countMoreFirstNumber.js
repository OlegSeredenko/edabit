/*на вход подается 8 чисел от пользователя, неободимо узнать сколько чисел больше самого первого числа
*/

let count = 0;
let num1 = prompt('Введите число ');
num1 = Number(num1);
for (let i = 0; i < 7; i++) {
    let num = prompt('Введите число ');
    num = Number(num);
    if (num > num1) {
        count = count + 1;
    }
}
console.log( count + ' чисел больше ' + num1);
