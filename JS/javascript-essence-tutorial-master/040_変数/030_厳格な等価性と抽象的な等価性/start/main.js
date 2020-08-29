function printEquality(a, b) {
// 厳格な等価性のため、データ型まで含めて比較される
console.log(a === b);
// 抽象的な等価性のため、型までは問われないため、等価とみなされる
console.log(a == b);
}

let a = '1';
let b = 1;

let c = true;

// printEquality(b, c);

let e = "";
let f = 0;

// printEquality(e, f);

let g = null;
let h;

printEquality(g, h);
