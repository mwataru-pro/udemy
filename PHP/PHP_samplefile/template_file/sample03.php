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
// 本課題：画面に現在の時刻を表示する

// 日本時刻に合わせる
date_default_timezone_set('Asia/Tokyo');
// dateファンクション：日付時刻を書式化する。（s = 現在の秒を表示）
print(date('現在は' . 'G時 i分 s秒' . 'です'));
// .を使用することで文字列連結が可能になる
?>
</pre>
</main>
</body>    
</html>