let text = "hello world [JavaScript] we [are] strong!";
let isFalse = true;
let result = "";
// TODO: 
// YOUR CODE HERE
for (let index = 0; index < text.length; index++) {
    if (text[index] == "[" ) {
        isFalse = false
    }else if (text[index] != "[" && isFalse){
        result+=text[index]
    }else if (text[index] == "]"){
        isFalse = true
    }
}
console.log(result);
// output: hello world we strong!


