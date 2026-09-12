<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>ユーザー入力（1/3）入力</h1>
    <form action="confirm.php" method="post">
        <p>
            <lavel>お名前：</lavel>
            <input type="text" name="name" required>
        </p>
        <p>
            <label>メールアドレス：</label>
            <input type="email" name="email" required>
        </p>
        <p>
            <lavel>年齢：</lavel>
            <input type="number" name="age" min="0" max="120"  required>
        </p>
        <button type="submit">確認画面へ</button>
    </form>
</body>
</html>
