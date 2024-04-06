var a = 10;
let b = 20;
const c = 30;

function myFunction() {
    a = 15;
    let b = 25;
    console.log(b);
}

myFunction();

console.log(a);
console.log(b);