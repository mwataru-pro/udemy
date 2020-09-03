<?php session_start(); ?>
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
<?php
  // ページ間を遷移する際は情報が保持されているが、ブラウザを閉じてしまうと情報が消えます。
  // CookieとSessionでは情報の保存期間に違いがある。
  print($_SESSION['session_message']); 
?>
</pre>
</main>
</body>    
</html>