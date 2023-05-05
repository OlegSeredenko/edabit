/*напишите функцию, которая принимает число, и если оно не простое, то выводит пердыдущее простое число 
*/
  
function simpleNumber()
{
    let num = prompt('Введите число ');
    num = Number(num);
    let num_next = num;
    let count = 0;
    let count_x = 0;
    for (let i = 1; i <= num; i++) {
        if (num % i == 0) {
            count = count + 1;
        }
    }
    if (count == 2) {
        console.log("число " + num + " простое");
    } else {
        while (count_x != 2) {
            num_next = num_next - 1;
            count_x = 0;
            for (let j = 1; j <= num_next; j++) {
                if (num_next % j == 0) {
                    count_x = count_x + 1;
                }
            }
        }
        console.log("предыдущее просто число перед " + num + " это " + num_next);
    }
}
