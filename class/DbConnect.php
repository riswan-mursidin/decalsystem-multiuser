<?php  

// CLASS CONNECT DB
class DbConnect{
    // SET ATTRIBUTE CONFIG DB
    private $servername;
    private $username;
    private $password;
    private $dbname;
    // METHOD CONNECT TO DB
    protected function dbConn(){
        // GET VALUE TO ATTRIBUTE
        $this->servername = "localhost"; 
        $this->username = "root";
        $this->password = ""; 
        $this->dbname = "decalsystem";
        // METHOD MYSQLI
        $connect = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        // IF VALUE IS TRUE
        if($connect){
            return $connect; // RETURN THE VALUE CONNECTION
        }
    }
    

    
}


?>