/*на вход подаются числа (количестов баллов), необходимо найти макисмальное количесвто баллов и какой порядковый номер у победителя
*/

function findHypotenuse (n) 
{
    let result_key = 0;
    let result = 0;
    for (let i = 1; i <= n; i++) {
        let num = prompt('Введите число ');
        num = Number(num);
        if (num > result) {
            result = num;
            result_key = i;
        }
    }
    return 'лучший результат ' + result + ' победитель №' + result_key;
}


