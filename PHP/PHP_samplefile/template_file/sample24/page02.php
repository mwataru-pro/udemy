<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
  <!-- 変数は表示している画面でだけ使用が可能なため別のページへジャンプした場合は機能しない -->
  変数の値：<?php print($value); ?>
  <!-- Cookieに保存した値は見ることができる -->
  Cookieの値：<?php print($_COOKIE['save_message']); ?>
</pre>
</main>
</body>    
</html>