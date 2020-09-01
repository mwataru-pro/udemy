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
  <!-- $_REQUEST['name属性の値'], htmlspecialchars->セキリティーをかける。html形式での入力を拒否(エスケープする) -->
  <!-- $_REQUESTはmethodがgetでもpostでも受け取れる。どちらで送られてくるか分からない時に便利。基本的にはgetの際は_GET,postのときは_POSTで受け取る方がいい。 -->
  お名前：<?php print(htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES)); ?>
</pre>
</main>
</body>    
</html>