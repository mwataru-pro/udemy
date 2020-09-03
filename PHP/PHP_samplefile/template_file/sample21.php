<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$zip = '９８７−６５４２';
// 'a'->英数字を半角に直す
$zip = mb_convert_kana($zip, 'a', 'UTF-8');
if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
// preg_match正規表現としてマッチするかチェックする
// \d{3} \dは全ての数字を指し{n}でn回続くことを意味する(数字が三回続くこと)
// [-] 3つの数字とこの後に続く数字を繋いでくださいという指示
// \d{4} \d{3}に同じ
// /\Aは文章の出だしからそれ以降の記述の表記であるという宣言のようなモノ
// \z 文章の終わりを示す
  print('郵便番号：〒' . $zip);
} else {
  print('※ 郵便番号を123-4567の形式でご記入ください');
}
?>
</pre>
</main>
</body>    
</html>