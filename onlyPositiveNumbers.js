/*на вход подается 7 чисел от пользователя, неободимо вывести количесвто положительных чисел
*/

let count = 0;
for (let i = 0; i < 7; i++) {
    let num = prompt('Введите число ');
    num = Number(num);
    if (num > 0) {
        count = count + 1;
    }
}
console.log(count);