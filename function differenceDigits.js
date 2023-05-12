/*на вход подается число (допустим x), необходимо узнать каких цифр в не больше четных или нечетных
*/


  
function differenceDigits()
{   
    let n = prompt('Введите число ');
    let result = n;
    let sumEven = 0;
    let sumOdd = 0;
    n = String(n);
    n = n.split('');
    for (let i = 0; i < (n.length); i++) {
        console.log(n[i]);
        if (n[i] % 2 == 0) {
            sumEven = sumEven + 1;
        } else {
            sumOdd = sumOdd + 1;
        }
    }
    if (sumEven > sumOdd) {
        return "В числе " + result + " больше четных";
    } else if (sumEven < sumOdd) {
        return "В числе " + result + " больше нечетных";
    } else if (sumEven == sumOdd){
        return "В числе " + result + " четных и нечетных цифр одинаково";
    }
}
