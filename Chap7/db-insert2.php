<meta charset="UTF-8"/>
<pre>
<?php
require 'MDB2.php';
require 'DbConst.php';

$db = MDB2::connect(DbConst::DSN_PATH);

if (PEAR::isError($db)) {
    exit('fail to connect to DB; ' . $db->getMessage());
}

$db->setErrorHandling(PEAR_ERROR_DIE);

$sql[] = "INSERT INTO users VALUES(2, 'jiro', 'jiro@example.com')";
$sql[] = "INSERT INTO users VALUES(3, 'sabu', 'sabu@example.com')";
$sql[] = "INSERT INTO users VALUES(4, 'siro', 'siro@example.com')";
$sql[] = "INSERT INTO users VALUES(5, 'goro', 'goro@example.com')";

foreach($sql as $query) {
    $db->query($query);
}

echo 'OK!';
