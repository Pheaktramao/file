let arr1 = [1,3,6,7,9];
let arr2 = [4,3,5,9,1];
let array =[];
for (let index = 0; index < arr1.length; index++) {
    if (arr1[index]>arr2[index]) {
        array.push(arr1)
    }    
}
console.log(array);