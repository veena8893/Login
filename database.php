<?php
// used to get mysql database connection
class DatabaseService{

    private $db_host = "sql6.freemysqlhosting.net";
    private $db_name = "sql6428206";
    private $db_user = "sql6428206";
    private $db_password = "6QKh7iNhRN";
    private $connection;

    public function getConnection(){

        $this->connection = null;

        try{
            $this->connection = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_password);
        }catch(PDOException $exception){
            echo "Connection failed: " . $exception->getMessage();
        }

        return $this->connection;
    }
}
?>
