/*напишите функцию, которая помещает 20 случайных числе в массив, затем создаем новый массив, в котором будт элементы из первого массива с четным индексом
*/

function getRandomArbitrary() {
    let maxi = 10;
    let mini = 99;
    return Math.round(Math.random() * (maxi - mini) + mini);
  }
  
  function randomNumber(n)
  {
    let arr = []
    for (let i = 0; i < n; i++) {
        let x = getRandomArbitrary();
        arr.push(x);
    }
    let secondArr = []
    let l = arr.length - 1;
    for (let j = l; j >= 0; j--) {
        if (j % 2 != 0) {
            secondArr.push(arr[j]);
        }
    }
    secondArr = secondArr.reverse();
    console.log(secondArr);
  }
