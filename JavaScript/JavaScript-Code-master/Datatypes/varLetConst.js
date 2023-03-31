// var declarations are function scoped.
// Let declarations are block scoped.
// Const declarations are block scoped.


// Function Scope:--> Visibility is limited to the function

function fnScope()
{
    var x = 10;
    console.log(x);  // prints 10
}
 fnScope()

 //console.log(x);  // Reference erro: x is not defined


// Block Scope: ---> Visibility is limited to the block
 if(true)
 {
    let y = 10
    console.log(y);   // prints 10
 }
//console.log(y);     // Reference error: y is not defined
