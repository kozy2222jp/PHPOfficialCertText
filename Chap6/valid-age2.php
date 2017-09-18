<html>
    <head>
        <title>valid-age2</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
            年齢：<input type="text" name="age" /><br />
            <input type="submit" />
        </form>
        <?php
        if (isset($_POST['age'])) {
            $age = $_POST['age'];
            if (($age < 3) || ($age > 120)) {
                echo '正しい年齢を入力してください。' . '<br />';
            }
        }
        ?>
    </body>
</html>