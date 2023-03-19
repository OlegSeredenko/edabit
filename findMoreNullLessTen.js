//Дан массив с числами. С помощью цикла выведите только те элементы массива, которые больше нуля и меньше 10-ти
function findMoreNullLessTen(arr) {
    let l = arr.length;
    for (let i = 0; i < l; i++) {
      let digit = arr.pop(arr);
      if ((digit < 10) && (digit > 0)){
          alert( digit );
      }
    }
  }