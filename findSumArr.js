/*Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.
*/
function findSumArr(arr) {
    let sum = 0;
    for (let i = 0; i < arr.length; i++) {
      sum += arr[i];
    }
    console.log(sum);
  }