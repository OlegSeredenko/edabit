/*на вход подается двухзначное число от пользователя, неободимо узнать на сколько двухзначных чисел это число делится без остатка
*/

let count_good = 0;
let count_bad = 0;
let num1 = prompt('Введите количество учеников в классе ');
num1 = Number(num1);
for (let i = 0; i < num1; i++) {
    let num2 = prompt('Введите оценку ученика ');
    num2 = Number(num2);
    if (num2 <= 2) {
        count_bad = count_bad + 1;
    }
}

if (count_bad > Math.floor(num1 / 2)) {
    console.log( 'Контрольная была провальной');
} else {
    console.log( 'Контрольная была успешной');
}

