/*Дан массив с числами. С помощью цикла найдите сумму квадратов элементов этого массива.
*/
function findSumSquareNumber(arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
      sum += Math.pow(arr[i], 2);
    }
    console.log(sum);
  }