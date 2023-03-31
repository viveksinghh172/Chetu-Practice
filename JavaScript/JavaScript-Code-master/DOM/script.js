// let x = function(e){
//     alert('Hello JS');
// }

// let y = function(e){
//     alert('How are you?');
// }

// btn.addEventListener('click', x)

// btn.addEventListener('click', y)

// let a = prompt("What is favourite number?");

// if(a == "2")
// {
//     btn.removeEventListener('click', x);
// }
const input = prompt("Please enter a list of numbers separated by commas:");

// Split the input string into an array of numbers
const numbers = input.split(",").map(Number);

// Reverse the array using the Array.reverse() method
const reversedNumbers = numbers.reverse();

// Print the reversed array to the console
console.log(reversedNumbers);