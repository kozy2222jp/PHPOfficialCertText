<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php';
require 'DbConst.php';

$db = MDB2::connect(DbConst::DSN_PATH);

DbConst::checkConnectError($db);

$db->loadModule('Extended');

$affected = $db->exec("UPDATE users SET email = 'taro@example.org' WHERE user_id = 1");
echo "変更したのは、" . $affected . "件です。\n";
$r = $db->getAll("SELECT * FROM users");
print_r($r);