<?php
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>完了画面</title>
</head>
<body>
    <h1>ユーザー登録（3/3）完了</h1>

    <!-- 名前とメールアドレスの表示 -->
    <p><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>さん、登録が完了しました！</p>
    <p>確認メールを <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?> に送信しました。</p>

    <!-- 最初に戻るボタンの表示 -->
    <a href="input.php">最初に戻る</a>
</body>
</html>