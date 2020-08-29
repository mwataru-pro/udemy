const a = 0;
const b = 1;
const c = 3;
const d = 0;

// truethかfaltyかを判断し、faltyなものが式の途中にあったらそれを結果として返す。なかったら最後の値を返す。truty返し
console.log(a && b && c);
// 上と同じ。aがfaltyならbに値を取りに行く。
console.log(a || b || c);
console.log((a || b) && c);
//  ()で囲んでグループ化
console.log((a || b) && (c || d));