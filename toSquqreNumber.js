/*сделать программу, которая принимает с клавиатуры число, а затем выводи на экран последующие ему числа,пока сумма этих чисел не превысит квадрат введённого числа
*/

let num = prompt('Введите число ');
num = Number(num);
let numSquare = num ** 2;
let sum = 0;
do {
    num = num + 1;
    sum = sum + num;
    console.log(num);
} while (sum < numSquare)
