function printTypeAndValue(val) {
  console.log(typeof val, val)
}

let a = 0;

printTypeAndValue(a);

let b = '1' + a;
// aが文字列になる

printTypeAndValue(b);

let c = 15 -b;
// cは数値の計算になる

printTypeAndValue(c);

let d = c - null;
// nullが数値の０に暗黙的になる

printTypeAndValue(d);

let e = d - true;
// true(真偽値)は数値として使われると1となる

printTypeAndValue(e);