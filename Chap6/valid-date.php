<html>
    <head>
        <title>valid-date</title>
        <meta charset="UTF-8" />
    </head>
    <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        年：<input type="text" name="year" /><br />
        月：<input type="year" name="month" /><br />
        日：<input type="day" name="day" /><br />
        <input type="submit" value="submit" /><br />
    </form>
    <?php
    if(!isset($_POST['year']) || !isset($_POST['month']) || !isset($_POST['day']) ) {
        echo '値を入力してください。<br />';
        goto skip;
    }
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    // エポックタイムに変換
    $check_date = strtotime("$year-$month-$day");
    $now = time();
    // 60[sec] * 60[min] * 24[hour] * 10[day]
    $range_sec = 60 * 60 * 24 * 10;
    $range_start = $now - $range_sec;
    $range_end = $now + $range_sec;
    if ($range_start <= $check_date && $check_date <= $range_end) {
        echo "問題ありません<br/>";
    } else {
        echo "問題あります。<br/>";
    }
    // ラベル
    skip:
    ?>
</html>