/*У прямоугольного треугольника две стороны n (со значением 3) и m (со значением 4). 
Найдите гипотенузу k по теореме Пифагора (нужно использовать функцию Math.pow(число, степень) или оператор возведения в степень ** ).
*/

let n = 3;
let m = 4;
function findHypotenuse (n , m) 
{   
    let h = Math.pow(n, 2) + Math.pow(m, 2);
    h = Math.sqrt(h);
    return h;
}
console.log(findHypotenuse (n , m));