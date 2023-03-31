/*напишите функцию, которая принимает одно число и выводит 7 нечетных чисел, следующих за ним
*/

let num = prompt('Введите число');
num =  Number(num);

if (num % 2 == 0) {
    num = num + 1;
} else {
    num = num + 2;
}
let allNumbers = [];
for (let i = 0; i < 7; i++){
    allNumbers.push(num);
    num = num + 2;
  }
  
console.log(allNumbers);