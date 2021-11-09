// Write a function for reversing numbers in binary. 
// For instance, the binary representation of 13 is 1101, and reversing it gives 1011, which corresponds to number 11.

function reverseNumberInBinary(n) {
	n = (n >>> 0).toString(2);
    n = n + "";
    return n.split("").reverse().join("");
}

console.log(Number(reverseNumberInBinary(11)));
console.log(Number(reverseNumberInBinary(13)));