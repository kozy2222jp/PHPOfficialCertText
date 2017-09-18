<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php';
require 'DbConst.php';

$db = MDB2::connect(DbConst::DSN_PATH);

DbConst::checkConnectError($db);

$db->setErrorHandling(PEAR_ERROR_DIE);

$sql = " SELECT user_ID, name, email FROM users";

$res = $db->query($sql);

while($row = $res->fetchRow()) {
    $user_id    = $row[0];
    $name       = $row[1];
    $email      = $row[2];
    echo htmlentities("$user_id, $name, $email\n");
}