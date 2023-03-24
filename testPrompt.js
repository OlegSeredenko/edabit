/*преобразовнаие типов и метод prompt
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