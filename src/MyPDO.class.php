<?php 

class MyPDO extends PDO
{
    public function __construct($dsn, $username = 'root', $password = 'example', $options = [])
    {
        $default_options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ];
        $options = array_replace($default_options, $options);
        parent::__construct($dsn, $username, $password, $options);
    }
    public function run($sql, $args = null)
    {
        $stmt = $this->prepare($sql);
        $stmt->execute($args);
        return $stmt;
    }
}