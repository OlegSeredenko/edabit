/*на вход подается число (допустим x), необходимо получить сумму всех положительных чисел меньше х
*/

function randomNumber(n)
{   
    //let arr = [];
    let sum = 0;
    for (let i = 1; i < n; i++) {
        //let n = getRandomArbitrary();
        sum = sum + i;
    }
    return " Сумма чисел от нуля до " + n  + " равна " + sum;
}

