<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "your-email@example.com"; // 送信先のメールアドレスに変更してください
    $subject = "ポートフォリオからのお問い合わせ";
    $body = "お名前: $name\nメールアドレス: $email\nメッセージ:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "メッセージが送信されました。";
    } else {
        echo "送信に失敗しました。再度お試しください。";
    }
}
?>
