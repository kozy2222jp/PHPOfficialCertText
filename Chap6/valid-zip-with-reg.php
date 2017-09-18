<html>
    <head>
        <title>valid-zip-with-reg</title>
        <meta charset="UTF-8" />
    </head>
    <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        郵便番号：<input type="text" name="zip" /><br />
        <input type="submit" value="送信" /><br />
    </form>
    <?php
    if (!isset($_POST['zip'])) {
        goto skip;
    }
    $zip = $_POST['zip'];
    $reg_pattern = '/^\d{3}\-\d{4}$/';
    if (!preg_match($reg_pattern, $zip)) {
        echo "郵便番号は、###-####の形式で入力してください。";
    } else {
        echo "郵便番号の形式です。";
    }
    skip:
    ?>
</html>