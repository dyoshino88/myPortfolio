<!-- フォームの確認内容をメールで送信 -->
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// メール本文作成
$mailText = '名前：' . $name . "\r\n"
    . 'メールアドレス：' . $email . "\r\n"
    . '内容：' . $message . "\r\n";

mail('ggtestaddress@gmail.com', 'お問い合わせ', $mailText);
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
</head>

<body>
    <h1>送信完了</h1>
    <p>お問い合わせありがとうございます。</p>
    <p>送信が完了しました。</p>
</body>

</html>