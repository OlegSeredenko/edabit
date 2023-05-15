/*на вход подается число (допустим x), значит функция должа получить от пользователя такое количесвто чисел. Необходимо узнать, сумму чисел, котрые кратны трем
и последняя цифра равна четрыем
*/
  
function findSum()
{   
    let countNumbers = prompt('Сколько чисел будет в массиве? ');
    let arr = [];
    for (let i = 0; i < countNumbers; i++) {
        arr[i] = Number(prompt('Введите число '));
    }
    let sum = 0;
    for (let j = 0; j < countNumbers; j++) {
        if ((arr[j] % 3 == 0) && (arr[j] % 10 == 4)) {
            sum = sum + arr[j];
        }
    }
    return sum;
}
