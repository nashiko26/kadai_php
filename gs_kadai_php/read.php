<?php

// ファイルを読み込む
$data = file_get_contents('data/data.txt');

// 読み込んだものをブラウザ表示
// nl2brは改行コードをbrタグに変換する関数
echo nl2br($data);

?>