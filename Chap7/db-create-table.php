<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php'; // MDBクラスのインポート
require 'DbConst.php'; //DbConstクラスのインポート

$db = MDB2::connect(DbConst::DSN_PATH);

$query = <<< _EOD_
CREATE TABLE users (
        user_id INT,
        name    TEXT,
        email   TEXT
)
_EOD_;

$q = $db->query($query);

if (PEAR::isError($q)) {
    die('Fail to execute query... ' . $q->getMessage());
} else {
    echo 'success';
}

