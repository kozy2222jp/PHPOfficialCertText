<html>
    <head>
        <title>valid-name</title>
        <meta charset="UTF-8" />
    </head>
    <body>
        <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
            入力欄：<textarea name="text" /></textarea><br />
        <input type="submit" value="送信" />
            <?php
            if (isset($_POST['text'])) {
                $text = $_POST['text'];
                $len = strlen($text);
                if ($len < 4) {
                    echo '文字列が短すぎます<br />';
                } else {
                    echo '入力しすぎです(笑)<br />';
                }
            }
            ?>
        </form>
    </body>
</html>