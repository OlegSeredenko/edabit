/*напишите функцию, которая выводит рандомное число от -25 и до 25. Если Число отрицательное, нужно добавить занк вопроса
*/

function getRandomArbitrary() {
    let maxi = 25;
    let mini = -25;
    return Math.round(Math.random() * (maxi - mini) + mini);
  }
  
  function randomNumber(n)
  {
      for (let i = 0; i < n; i++) {
          let n = getRandomArbitrary();
          if (n > 0) {
              alert(n);
          } else if (n < 0) {
              alert(n + '?');
          } 
      }
  }