<html>
    <head>
        <title>valid-zipcode</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
            郵便番号：<input type="text" name="zip" /><br />
            <input type="submit" value="決定" /><br />
            <?php
            if(isset($_POST['zip'])) {
                $zip = trim($_POST['zip']);
                $zip = str_replace('-', '', $zip);
                $len = strlen($zip);
                if ($len != 7) {
                    echo '郵便番号が正しく入力されていません。';
                }
            }
            ?>
        </form>
    </body>
</html>