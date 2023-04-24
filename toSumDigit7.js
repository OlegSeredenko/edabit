/*сделать программу, которая принимает с клавиатуры числа, пока не будет введено число, сумма цифр которого равна 7
*/

let arr = [];
let num = 0;
let sum = 0;
let x = 0;
do {
    num = 0;
    sum = 0;
    x = 0;  
    num = prompt('Введите число двухзначное число ');
    if (num < 10 || num > 99) {
        console.log('Вы ввели не двухзначное число')
        continue;
    }
    arr.push(num);
    num = String(num);
    num = num.split('');
    for (let i = 0; i < 2; i++) {
        x = Number(num[i]);
        sum = sum + x;
    }
} while (sum != 7)

console.log('Полученный массив чисел ' + arr + ' Ввод завершен, так как сумма цифр ' + num + ' равна 7');