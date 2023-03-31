// Object ----> It's a key value pair

/*const item = {
    "first": true,
    "second": false,
    "third": 67,
    "fourth": undefined
}
document.write(item["third"]);
document.write("<br><br>");
//modication in the const obj
const a = {
    student: 'vivek',
    section: 1,
    isPrincipal: false
}
//a = 45   ----> Not possible
//do istead
a['friend'] = "Shubham"
a['teacher'] = "Ajay"
document.write(a['friend']);
document.write("<br>",a['friend']," ",a['teacher']);*/



// Program to print the marks of a student in an object using for loop

/*let marks = {
    hindi: 90,
    english: 80,
    maths: 80,
    science: 85
};
// using for loop
for (let [key, value] of Object.entries(marks))
{
    //console.log("The marks in " + Object.keys(marks)[i] + "are" + marks[Object.keys[marks][i]])
    document.write(`${key}: ${value}`);
} */



// Create an object with a method in js and call it using object name

const myObject = {
    myMethod: function(){
        window.write("Hello JavaScript!");
    }
};
myObject.myMethod();
    