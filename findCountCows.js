/*сделать программу, которая принимает число и рассчитывает сколько коров и быков можно купить на эти деньги (нужны все возможные варинаты), бык стоит 10, корова 5
*/

function findResult(a) {

    for (let i = 0; i <= a; i++) {
        let x = a - i;
        let countBull = i / 10;
        let countCows = 0;
        for (let j = 5; j <= x; j++) {
            countCows = countCows + 1;
            j = j + 4;
        }
        console.log('на ' + a + ' рублей можно купить ' + countBull + ' быков и ' + countCows + ' коров');
        i = i + 9;
    }
}