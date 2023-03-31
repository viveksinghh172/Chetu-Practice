document.write("Hello JavaScript");

var a = 67 // A contains 67
document.writeln("<br>",a);

// Let var and const
document.write("</br> difference between let, var and const<br>");

//  Var can be reinitilized and modified

var b = 5;
document.write("<br> value of b is: ",b);

// modification
b = 10;
document.write("<br> After modification b is: ",b);

// Reinitializatio
var b = 15;
 document.write("<br>After reinitialization b is:", b);


// Let can be modified but cant't reinitialized
 document.write("<br><br><h4>Use of 'let'</h4>");

 let c = "This is let";
 document.write(c);

 // Modification

 c = "Modified let";
 document.write("<br>",c);


 //Const can neither reinitialized nor modified
 document.write("<h4>Use of 'const'</h4>");

 const d = "can't be changed";
 document.write(d);

//  d = "hello";    --------> No outcome
//  document.write(d);


// Checking the scope of var, let and const

document.write("<h4>Scope of var, let and const</h4>");

var x = 45;
let y = "data";
var z = null;
var i = undefined;
{
    let y = 'this';
    document.write("<br>",y);
    var x = 46;
    document.write("<br>",x);
}
document.write("<br>",y);
document.write("<br>",x);