<?php

const MYSQL_DUPLICATE_KEY_ENTRY = 1062;

class MySQLException extends \Exception {}
class MySQLDuplicateKeyException extends MySQLException {}
?>