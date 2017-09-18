<?php
class DbConst {
    const DSN_PATH = 'mysql://testuser:testpass@localhost/booksample';
    
    public static function checkConnectError($db) {
        if (PEAR::isError($db)) {
            exit('fail to connect to DB;' . $db->getMessage());
        }
    }
}