<!-- ポートフォリオから受信したフォームデータの確認画面 -->
<?php
// $_POST[]によって受け取ったデータを変数に代入
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>送信内容</title>
</head>

<body>
    <h1>確認画面</h1>

    <form action="send.php" method="post">
        <p>内容に間違いがなければ、送信ボタンを押してください。</p>
        <p>お名前 : <input type="text" name="name" value="<?php echo $name; ?>" disabled></p>
        <p>メールアドレス : <input type="text" name="email" value="<?php echo $email; ?>" disabled></p>
        <p>内容 : <textarea name="message" cols="30" rows="10" disabled><?php echo $message; ?></textarea></p>

        <!-- 入力画面から受け取ったデータを格納 -->
        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="message" value="<?php echo $message; ?>">

        <input type="submit" value="送信">
    </form>
</body>

</html>