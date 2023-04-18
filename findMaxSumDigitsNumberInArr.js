/*на вход подается число (необходимое количество рандомных чисел) , необходимо получить узнать число, у которого сумма цифр самая большая (и порядковый номер этого числа)
*/

function getRandomArbitrary() {
    let maxi = 100;
    let mini = 999;
    return Math.round(Math.random() * (maxi - mini) + mini);
}
  
function randomNumber(n)
{   
    let arrNum = [];
    let result = 0;
    let resultNumber = 0;

    for (let i = 0; i < n; i++) {
        let num = getRandomArbitrary();
        arrNum[i] = num;
        num = String(num);
        let x = 0;
        let sum = 0;
        for (let l = 0; l < 3; l++) {
            x = Number(num[l]);
            sum = sum + x;
        }
        if (result < sum) {
            result = sum;
            resultNumber = i  + 1;
        }
    }
    console.log('полученный массив рандомных чисел ' + arrNum + '\n');
    console.log('максимальная сумма цифр числа из массива ' + result + ' порядковый номер этого числа ' + resultNumber);
}