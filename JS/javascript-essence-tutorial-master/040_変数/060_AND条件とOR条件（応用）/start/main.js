function hello(name) {
  name = name || 'Tom';
  // 上記と同義（値の初期化の簡略化）
  // if(!name){
  //   name = 'Tom';
  // }
  console.log('Hello ' + name);
} 

hello();

let name;

name && hello(name);
