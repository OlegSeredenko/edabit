/*сделать программу, которая принимает с клавиатуры числа, пока не будут введены два одинаковых числа и вывести сумму этих равных чисел
*/

let arr = [];
let count = 0;
let num = 0;
num = prompt('Введите число ');
num = Number(num);
count = 0;
arr.push(num);
do {
    num = prompt('Введите число ');
    num = Number(num);
    count = count + 1;
    arr.push(num);
    
} while (arr[count - 1] != arr[count])
num = num + num;
console.log("Последние два числа равны, их сумма " + num);