<html>
    <head>
        <title>valid-address</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
            住所：<input type="text" name="address" /><br />
        </form>
        <?php
        if (isset($_POST['address'])) {
            $address = $_POST['address'];
            $len = strlen($address);
            if ($len === 0) {
                echo '住所が入力されていません。';
            }
        }
        ?>
    </body>
</html>