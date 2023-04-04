/*на вход подается 7 чисел от пользователя, неободимо узнать сколько чисел больше предыдущего числа
*/

let count = 0;
let arr = [];
let num = prompt('Введите число ');
arr[0] = num;

for (let i = 1; i < 7; i++) {
    let num = prompt('Введите число ');
    num = Number(num);
    arr[i] = num;
    if (arr[i] > arr[i-1]) {
        count = count + 1;
    }
}
console.log( count + ' чисел больше, чем предыдущее ');
