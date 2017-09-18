<?php
require 'MDB2.php';
require 'DbConst.php';
$db = MDB2::connect(DbConst::DSN_PATH);

if (PEAR::isError($db)) { 
    die('接続失敗：' . $db->getMessage());
 } else {   
    echo '接続できました。';
 }