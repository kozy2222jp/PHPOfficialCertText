<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php';
require 'DbConst.php';

$db = MDB2::connect(DbConst::DSN_PATH);

DbConst::checkConnectError($db);

$db->loadModule('Extended');

$sql = "DELETE FROM users WHERE user_id >= 3 AND user_id < 5";
$affected = $db->exec($sql);
echo "変更したのは、" . $affected . "件です。\n";

$r = $db->getAll("SELECT * FROM users");
print_r($r);