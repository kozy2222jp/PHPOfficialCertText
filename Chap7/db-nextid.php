<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php';
require 'DbConst.php';

$db = MDB2::connect(DbConst::DSN_PATH);

DbConst::checkConnectError($db);

$db->setErrorHandling(PEAR_ERROR_DIE);

$name = array("roku", "nana");
$email = array("roku@example.com", "nana.example.com");

for($i = 0; $i < count($name); $i++) {
    $id = $db->nextID('users');
    $db->query("INSERT INTO users VALUES($id, '{$name[$i]}', '{$email[$i]}')");
}
echo 'OK.';