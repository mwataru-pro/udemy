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
// file_get_contents ファイルを読み込む

$news = file_get_contents('../../news_data/news.txt');
$news .= "\n2020-08-30 ニュースを追加しました";
file_put_contents('../../news_data/news.txt', $news);

print($news);


// readfile('../../news_data/news.txt');
// ※読み込んだファイルを再加工、変更を加えることには対応していない。

?>
</pre>
</main>
</body>    
</html>