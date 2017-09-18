<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php';
require 'DbConst.php';

$db = MDB2::connect(DbConst::DSN_PATH);

DbConst::checkConnectError($db);

$db->loadModule('Extended');

$result = $db->getAll('SELECT * FROM users');

foreach($result as $row) {
    $user_id    = $row[0];
    $name       = $row[1];
    $email      = $row[2];
    echo htmlentities("$user_id, $name, $email\n");
}