/*на вход подается число (необходимое количество рандомных чисел) , необходимо получить узнать самую маленькую сумму цифр из полученного массива чисел
например для массива [ 45, 82, 11, 78 ] отвтетом будет 2, так как сумма цифр числа 11 равна двум
*/

function getRandomArbitrary() {
    let maxi = 10;
    let mini = 99;
    return Math.round(Math.random() * (maxi - mini) + mini);
}
  
function randomNumber(n)
{   
    let arrNum = [];
    let result = 100;
    for (let i = 0; i < n; i++) {
        let num = getRandomArbitrary();
        arrNum[i] = num;
        num = String(num);
        num = num.split('');
        let sum = 0;
        let x = 0;
        for (let l = 0; l < 2; l++) {
            x = Number(num[l]);
            sum = sum + x;
        }
        if (sum < result) {
            result = sum;
        }
    }
    console.log(arrNum);
    return result;
}
