/*проверка знака введенного числа
*/

let num = prompt('Введите число');
if (num > 0) {
    alert('Положительное число');
} else if (num < 0) {
    alert('Отрицательное число');
} else {
    alert('Вы ввели ноль');
}