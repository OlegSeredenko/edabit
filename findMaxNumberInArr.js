/*на вход подается число (необходимое количество рандомных чисел) , необходимо получить узнать самую маленькую сумму цифр из полученного массива чисел
например для массива [ 45, 82, 11, 78 ] отвтетом будет 2, так как сумма цифр числа 11 равна двум
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
    let m = 0;
    let x = 0;
    for (let i = 0; i < n; i++) {
        let num = getRandomArbitrary();
        num = Number(num);
        arrNum[i] = num;
        m = Math.max(...arrNum);
        x = arrNum.indexOf(m) + 1; 
    }
    console.log(m + ' максимальное число; ' + x + ' его порядковый номер');
    console.log('полученный массив ' + arrNum);
}