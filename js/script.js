var a = "Hello";
var b = "World";
// var c = a + " " + b;
var c = `${a} ${b}`;
document.write(c);


var f = {toan:5, ly: 9, hoa: 2};
//dùng for in
var sum = 0;
for (mon in f) {
	sum += f[mon];
}
console.log(sum);