/*сделать программу, которая принимает с клавиатуры числа (пока их сумма не достигнет 100)
*/

let arr = [];
let sum = 0;
let num = 0;
do {
    num = prompt('Введите число ');
    num = Number(num);
    sum = sum + num;
    arr.push(num);
} while (sum < 100)
let l =  arr.length;
console.log("Получено " + l + " значений" + "\n" + "Полученный массив " + arr + "\n" +" Сумма элементов в массиве " + sum);