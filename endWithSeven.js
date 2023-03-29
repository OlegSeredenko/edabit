/*напишите функцию, которая выводит двузначные положительные числа от введенного числа до 0, ззаканчивающиеся на 7
*/

function endWithSeven(n)
{
    alert('старт');
    for (let i = 0; i < n; n--) {
        n = String(n);
        if (n[1] == 7) {
            alert(n);
        }
    }
    alert('финиш');
}

console.log(endWithSeven());