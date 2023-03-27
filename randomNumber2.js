/*напишите функцию, которая выводит рандомное число от 5 и до 50. Если Число делится на 3 без остатка, то добавит решетку перед числом
*/

function getRandomArbitrary() {
    let maxi = 5;
    let mini = 50;
    return Math.round(Math.random() * (maxi - mini) + mini);
  }
  
  function randomNumber(n)
  {
      for (let i = 0; i < n; i++) {
          let n = getRandomArbitrary();
          if (n % 3 == 0) {
              alert('#' + n);
          } else {
              alert(n);
          } 
      }
  }