<?php

$name = $_POST['name'];
$email = $_POST['email'];

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>完了画面</title>
    </head>
    <body>
        <h3>完了画面</h3>
        <p>下記の内容で登録しました。</p>
        <table border="1">
            <tr><td>項目</td><td>内容</td></tr>
            <tr><td>氏名</td><td><?php echo $name; ?></td></tr>
            <tr><td>Email</td><td><?php echo $email; ?></td></tr>
        </table>
    </body>
</html>