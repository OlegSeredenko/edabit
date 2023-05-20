/*вы будете соревноваться с программой - кто быстрее доберется от 0 до числа 100 (нельзя нзыватья числа больше 10). Вы вбиваете число, а программа пердлагает число рандомно, 
кто быстрее доберется до ста, тот выиграл
*/
 
function getRandomArbitrary() {
    let maxi = 1;
    let mini = 10;
    return Math.round(Math.random() * (maxi - mini) + mini);
}

function guessNumber()
{   
    let sumUser = 0;
    let sumComputer = 0;
    for (let i = 1; i <= 100; i++) {
        let n = prompt('Введите ваше число ');
        if (n > 10) {
            console.log('Число должно быть не больше 10');
            continue;
        }
        sumUser = sumUser + Number(n);
        let x = getRandomArbitrary();
        sumComputer = sumComputer + Number(x);
        if ((sumComputer >= 100) && (sumUser >= 100)) {
            return ("Ничья, у вас ушло " + i + " попыток");
        } else if (sumComputer >= 100) {
            return ("Компьютер выиграл за " + i + " попыток");
        } else if (sumUser >= 100) {
            return ("Вы выиграли за " + i + " попыток");
        }
    }
}
