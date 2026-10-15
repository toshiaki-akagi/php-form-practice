<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力画面</title>
</head>
<body>
    <div>
        <h1>ユーザー登録（1/3）入力</h1>

        <!-- 入力用のフォーム作成 -->
        <form action="confirm.php" method="post">
            <div>
                <label for="name">お名前: </label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">メールアドレス: </label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="age">年齢: </label>
                <input type="number" id="age" name="age" min="0" max="120" required>
            </div>
            <div>
                <button type="submit">確認画面へ</button>
            </div>
        </form>
    </div>
</body>
</html>