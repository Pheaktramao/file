let numbers = [1, 3, 5, 0, 2, 0, 1, 1, 2, 3];
let sum = 0;
let isOne = false;
// TODO: 
// YOUR CODE HERE
for (let number of numbers) {
    if (number == 1) {
        isOne = true;
    }else if(number != 1){
        sum+=number
    }else if(number == 0){
        isOne = false
    }
}
console.log(sum);
// output: 14 becuase 3 + 5 + 1 + 2 + 3





