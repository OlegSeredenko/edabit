/*на вход подается число (допустим x), необходимо узнать каких цифр в не больше четных или нечетных. Если четных, то вернуть сумму всех цифр этого числа. 
Если нечетных, то вернуть произведение всех цифр числа. */

function sumArr(a) {
    let resultSumArr = 0;
    for (let i = 0; i < (a.length); i++) {
        x = Number(a[i]);
        resultSumArr = resultSumArr + x;
    }
    return resultSumArr;
}

function multiplyArr(a) {
    let resultmultiplyArr = 1;
    for (let i = 0; i < (a.length); i++) {
        x = Number(a[i]);
        resultmultiplyArr = resultmultiplyArr * x;
    }
    return resultmultiplyArr;
}

  
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
        return "В числе " + result + " больше четных и сумма цифр равна " + sumArr(n);
    } else if (sumEven < sumOdd) {
        return "В числе " + result + " больше нечетных и произведение цифр равно " + multiplyArr(n);
    } else if (sumEven == sumOdd){
        return "В числе " + result + " четных и нечетных цифр одинаково";
    }
}
