/*на вход подается число (допустим 5), необходимо получить пять рандомных двухзначных чисел и сложить иъ сумму
*/

function getRandomArbitrary() {
    let maxi = 10;
    let mini = 99;
    return Math.round(Math.random() * (maxi - mini) + mini);
}
  
function randomNumber(n)
{   
    let sum = 0;
    for (let i = 0; i < n; i++) {
        let n = getRandomArbitrary();
        sum = sum + n;
    }
    return sum;
}
