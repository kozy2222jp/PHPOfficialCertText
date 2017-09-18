<html>
    <head>
        <title>val-age</title>
        <meta charset="UTF-8" />
    </head>
    <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        年齢：<input type="text" name="age" /><br />
        <input type="submit" value="submit" /><br />
    </form>
    <?php
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
        if ($age != strval(intval($age))) {
            echo "入力ミス！正しい値を入力してください。";
        }
    }
    ?>
</html>