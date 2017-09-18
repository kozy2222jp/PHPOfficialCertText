<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php';
require 'DbConst.php';

$db = MDB2::connect(DbConst::DSN_PATH);

if (PEAR::isError($db)) {
    exit('fail to connect to db;' . $db->getMessage());
}

$sql  = "";
$sql .= " INSERT INTO users (user_id, name, email)";
$sql .= " VALUES (1, 'taro', 'taro@example.com')";

$res = $db->query($sql);

if (PEAR::isError($res)) {
    exit('fail to execute sql; ' . $res->getMessage());
} else {
    echo 'success';
}
