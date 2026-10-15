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
    <title>確認画面</title>
    <style>
        table {
            width:50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>ユーザー登録（2/3）確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>

    <!-- 入力内容の表示 -->
    <table>
        <tr><td>お名前</td><td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>メールアドレス</td><td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td></tr>
        <tr><td>年齢</td><td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>歳</td></tr>
    </table>

    <!-- cmplete.phpへ入力情報の受け渡し・ボタンの表示 -->
    <form action="complete.php" method="post">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
        <button type="button" onclick="history.back()">戻る</button>
        <button type="submit">登録する</button>
    </form>
</body>
</html>