/*напишите функцию, которая помещает 20 случайных числе в массив
*/

function getRandomArbitrary() {
    let maxi = 10;
    let mini = 99;
    return Math.round(Math.random() * (maxi - mini) + mini);
  }
  
  function randomNumber(n)
  {
    let lst = []
    for (let i = 0; i < n; i++) {
        let x = getRandomArbitrary();
        lst.push(x);
    }
    console.log(lst);
  }