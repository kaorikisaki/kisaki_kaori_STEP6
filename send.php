<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

$name        = $_POST['name'] ?? '';
$companyName = $_POST['companyName'] ?? ''; 
$email       = $_POST['email'] ?? '';
$age         = $_POST['age'] ?? '';
$message     = $_POST['message'] ?? '';

$to = "test@example.com"; 
$subject = "【お問い合わせ】" . $name . "様より";
$mailBody  = "名前: " . $name . "\n";
$mailBody .= "会社名: " . $companyName . "\n";
$mailBody .= "メールアドレス: " . $email . "\n";
$mailBody .= "年齢: " . $age . "\n";
$mailBody .= "お問い合わせ内容:\n" . $message . "\n";
$headers = "From: " . $email;

mb_language("Japanese");
mb_internal_encoding("UTF-8");

if (mb_send_mail($to, $subject, $mailBody, $headers)) {
    $resultMessage = "お問い合わせが送信されました。ありがとうございます！";
} else {
    $resultMessage = "エラー：メールの送信に失敗しました。";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム-送信完了画面</title>
</head>
<body>

    <h1>お問い合わせフォーム-送信完了画面</h1>

    <p>
        <?php echo $resultMessage; ?>
    </p>

    <p><a href="contact.php">お問い合わせフォームに戻る</a></p>

</body>
</html>
