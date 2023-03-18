//Заполните массив 10-ю случайными числами от 1 до 10 с помощью цикла0
let arr = [];
for (let i = 1; i <= 10; i++) {
  arr.push(Math.floor(Math.random() * 10) + 1);
}
console.log(arr);