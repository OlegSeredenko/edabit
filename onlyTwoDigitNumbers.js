/*напишите функцию, которая выводит двузначные  числа, которые без остатка делятся на 5
*/

function onlyTwoDigitNumbers()
{
    alert('старт');
    for (let i = 0; i < 100; i++) {
        let n = i;
        n = String(n);
        if (n.length == 2 &&  (Number(n) % 5 == 0)) {
            alert(n);
        }
    }
    alert('финиш');
}

console.log(onlyTwoDigitNumbers());