/*угадать рандомное число
*/
 
function getRandomArbitrary(a,b) {
    let maxi = Number(a);
    let mini = Number(b);
    return Math.round(Math.random() * (maxi - mini) + mini);
}

function guessNumber()
{   
    let countNumbers = prompt('Сколько буд попыток? ');
    let maxi = prompt('Введите максимальное число в диапазоне ');
    let mini = prompt('Введите минимальное число в диапазоне ');
    for (let i = 0; i < countNumbers; i++) {
        let attempt = prompt('Попробуйте угадать число - введите свое число в выбранном диапазоне (от минимального до максимального) ');
        let x = getRandomArbitrary(maxi, mini);
        console.log(x);
        if (x == attempt) {
            return ("Вы угадали рандомное число " + attempt);
        } else {
            console.log("Вы не угадали рандомное число " + x + " попробуйте еще ");
        }
    }
}
