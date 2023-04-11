/*на вход подается количество учеников  в классе, а потом для каждого вводится оценка контроьной. Вывести среднее значение оценок, котрые больше 2
*/

let count = 0;
let sum = 0;
let num1 = prompt('Введите количество учеников в классе ');
num1 = Number(num1);
for (let i = 0; i < num1; i++) {
    let num2 = prompt('Введите оценку ученика ');
    num2 = Number(num2);
    if (num2 > 2) {
        count = count + 1;
        sum = sum + num2;
    }
}
let result = 0;
result = (sum / count).toFixed(1);
console.log("Средняя оценка из удовлетоврительных " + result);
