/*на вход подается число (допустим 5), необходимо получить пять рандомных двухзначных чисел и получить сумму только четных чисео
*/

function getRandomArbitrary() {
    let maxi = 10;
    let mini = 99;
    return Math.round(Math.random() * (maxi - mini) + mini);
}
  
function randomNumber(n)
{   
    let arr = [];
    let sum = 0;
    for (let i = 0; i < n; i++) {
        let n = getRandomArbitrary();
        if (n % 2 == 0) {
            sum = sum + n;
        }
        arr[i] = n;
    }
    return arr + " Сумма четных чисел " + sum;
}
