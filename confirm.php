<?php

$name = $_POST['name'];
$email = $_POST['email'];

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>確認画面</title>
    </head>
    <body>
        <h3>確認画面</h3>
        <form method="post" action="end.php">
            <table border="1">
                <tr><td>項目</td><td>内容</td></tr>
                <tr><td>氏名</td><td><?php echo $name; ?></td></tr>
                <tr><td>Email</td><td><?php echo $email; ?></td></tr>
            </table>
            <br>
            <input type="submit" value="登録する">

            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
        </form>
    </body>
</html>