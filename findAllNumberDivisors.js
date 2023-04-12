/*на вход подается чисел от пользователя, неободимо узнать сумму всех делителей включая само число и единицу
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
