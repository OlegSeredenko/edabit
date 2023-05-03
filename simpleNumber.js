/*напишите функцию, которая помещает 20 случайных числе в массив, затем создаем новый массив, в котором будт элементы из первого массива с четным индексом
*/


  
function simpleNumber()
{
    let num = prompt('Введите число ');
    let count = 0;
    for (let i = 1; i <= num; i++) {
        if (num % i == 0) {
            count = count + 1;
        }
    }
    if (count == 2) {
        console.log("число " + num + " простое");
    } else {
        console.log("число " + num + " не простое");
    }
}
