<?php
$value = '変数に保存した値です';
// time()で現在の時刻を取得し、その後の計算は14日間保管するという期限の設定
setcookie('save_message', 'Cookieに保存した値です', time() + 60 * 60 * 24 * 14);
?>

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
  <a href="page02.php">Page2へ</a>
</pre>
</main>
</body>    
</html>