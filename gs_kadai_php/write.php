<?php

// inputから受け取る
$name = $_POST['name'];
$category = $_POST['category'];
$sns = $_POST['sns'];
$email = $_POST['email'];
$date = $_POST['date'];
$address = $_POST['address'];
$text = $_POST['text'];
$password = $_POST['password'];

// データを整形する
// "\n"でdata.txtに改行保存
$data = $name . '｜' . $category . '｜' . $sns . '｜' . $email . '｜' . $date . '｜' . $address . '｜' . $text . '｜' .$password . "\n";

// データを保存する。
file_put_contents('data/data.txt', $data, FILE_APPEND)

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <link rel="stylesheet" href="/gs_kadai_php/style.css">

</head>

<body>

    <h1>登録が完了しました</h1>
    <!-- 確認画面 -->
    <table class="writetable">
        <tr>
            <th>作家名</th>
            <td><?php echo $_POST["name"] ?></td>
        </tr>
        <tr>
            <th>主な活動ジャンル</th>
            <td><?php echo $_POST["category"] ?></td>
        </tr>
        <tr>
            <th>SNSのURL</th>
            <td><?php echo $_POST["sns"] ?></td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td><?php echo $_POST["email"] ?></td>
        </tr>
        <tr>
            <th>出展日</th>
            <td><?php echo $_POST["date"] ?></td>
        </tr>
        <tr>
            <th>出展場所</th>
            <td><?php echo $_POST["address"] ?></td>
        </tr>
        <tr>
            <th>出展予定の作品および点数</th>
            <td><?php echo $_POST["text"] ?></td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td>************</td>
        </tr>
    </table>
</body>

</html>