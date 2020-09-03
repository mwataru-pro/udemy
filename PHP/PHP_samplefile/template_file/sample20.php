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
  $age = '20';
  // mb_convert_kana,コンバート(変換),半角に直してくれる
  // ageへ全角から半角へ変換した数値の再代入
  $age = mb_convert_kana($age, 'n', 'UTF-8');
  // is_numericというファンクションは指定されたパラメータが数値か判断してくれる
  if (is_numeric($age)) {
    // trueの場合(数値の場合の処理)
    print($age . '歳');
  } else {
    print('※ 年齢が数字ではありません');
  }
  ?>
</pre>
</main>
</body>    
</html>