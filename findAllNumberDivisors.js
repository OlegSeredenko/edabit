/*на вход подается 7 чисел от пользователя, неободимо узнать сколько чисел больше предыдущего числа
*/

let count = 0;
let num = prompt('Введите число ');
num = Number(num);
for (let i = 1; i <= num; i++) {

    if (num % i == 0) {
        count = count + 1;
    }
}
console.log( 'для ' + num + ' количество делителей ' + count);
