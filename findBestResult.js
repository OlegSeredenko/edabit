/*на вход подаются числа, необходимо найти макисмальное
*/

function findHypotenuse (n) 
{
    let result = 0;
    for (let i = 1; i <= n; i++) {
        let num = prompt('Введите число ');
        num = Number(num);
        if (num > result) {
            result = num;
        }
    }
    return result;
}


