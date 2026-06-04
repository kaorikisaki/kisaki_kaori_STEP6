<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h2>お問い合わせフォーム</h2>
    </header>

    <div class="contents-wrapper">
        <div class="sidebar">
            <ul>
                <li><a href="#">トップページ</a></li>
                <li><a href="#">人気投稿</a></li>
                <li><a href="#">エンジニアおすすめ商品</a></li>
                <li><a href="#">エンジニアおすすめ記事</a></li>
                <li><a href="#">投稿ページ</a></li>
            </ul>
        </div>
    
        <main>
            <form id="contactForm" action="confirm.php" method="POST">
                <table border="3">
                    <tr>
                        <th>お名前</th>
                        <td><input type="text" name="name" id="name" size="40" required></td> 
                    </tr>
                    <tr>
                        <th>会社名</th>
                        <td><input type="text" name="companyName" id="companyName" size="40" required></td>
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td><input type="email" name="email" id="email" size="40" required></td> 
                    </tr>
                    <tr>
                        <th>年齢</th>
                        <td><input type="text" name="age" id="age" size="40" required></td>
                    </tr>
                    <tr> 
                        <th>お問い合わせ内容</th>
                        <td><textarea name="message" id="message" rows="6" cols="40" placeholder="お問い合わせ内容" required></textarea></td>
                    </tr>
                </table>

                <div class="button-area">
                    <input type="submit" value="送信">
                </div>
            </form>
        </main>
    </div>

    <footer>
        <p>横のボタンを押すとfooterの背景色が変わります。</p>
        <button type="button" id="colorButton">押してみてね！</button>
    </footer>

    <script src="style.js"></script>
</body>
</html>