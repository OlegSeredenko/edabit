/*Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов, делить на количество)
*/
function findAverageArr(arr) {
    let l = arr.length;
    let result = arr.reduce(function(sum, elem) {
      return sum + elem;
    }, 0);
    console.log(result / l);
}