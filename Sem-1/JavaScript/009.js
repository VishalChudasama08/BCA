//alert
//alert("This is alert");
//alert("Hello! I am alert box");
//prompt
let a = prompt("Enter your name: ", "Vishal");
//confirm
let b = confirm("your name is Vishal ?");
if (b == true) {
   console.log("your name is ",a);
} else {
   a = prompt("Enter your name: ");
   console.log("your name is ",a);
}