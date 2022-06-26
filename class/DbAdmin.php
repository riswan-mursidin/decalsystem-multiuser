<?php  

// TABLE DECAL-ADMIN
class decalAdmin extends DbConnect{
    // SET NAME TABLE
    const TABLE_NAME = "decal_admin";
    private $username_admin = "galeri";
    private $password_admin = "galeriide123";
    // CONSTRUCTOR CLASS FOR CREATE TABLE
    function __construct(){
        // CHECK TABLE
        $tableExists = $this->checkAdmin();
        // IF DOESN'T EXISTS CREATE TABLE
        if($tableExists == 0){
            // SET QUERY
            $sql = "CREATE TABLE " . self::TABLE_NAME . "(
                id_admin INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username_admin varchar(6) NOT NULL UNIQUE,
                password_admin text NOT NULL,
                last_login_admin timestamp NULL
            )";
            // EXECUTE THE QUERY TO CREATE TABLE
            $exeCreateTB = $this->dbConn()->query($sql);
            if($exeCreateTB){
                $sqlInsert = "INSERT INTO " . self::TABLE_NAME . " (username_admin, password_admin) VALUES ('" . $this->username_admin . "', '" . password_hash($this->password_admin, PASSWORD_DEFAULT) . "')";
                $this->dbConn()->query($sqlInsert);
            };
            $this->dbConn()->close(); // CLOSE THE CONNECTION
        }
    }
    // METHOD CHECK IF TABLE EXISTS OR NOTHING
    private function checkAdmin(){
        // SET QUERY
        $sql = "SHOW TABLES LIKE '" . self::TABLE_NAME . "'";
        // EXECUTE THE QUERY
        $exe = $this->dbConn()->query($sql);
        // SET NUMS ROW TABLE
        $nums = $exe->num_rows;
        $this->dbConn()->close(); // CLOSE THE CONNECTION
        return $nums;
    }
    // METHOD SELECT DATA FROM TABLE
    public function selectAdmin(?string $param = null, ?string $val1 = null, ?string $val2 = null){
        // SET QUERY WITH PARAM
        if($param == "checkForLogin"){
            $sql = "SELECT username_admin, password_admin FROM " . self::TABLE_NAME . " WHERE username_admin='$val1'";
        }
        // EXECUTE THE QUERY
        $exe = $this->dbConn()->query($sql);
        // SET NUMS ROW TABLE
        $nums = $exe->num_rows;
        // SET DATA TABLE
        while($row = $exe->fetch_assoc()){
            $data[] = $row;
        }
        $result['nums'] = $nums; // GET TOTAL NUMS ROW TABLE
        $result['data'] = $data; // GET DATA TABLE
        $this->dbConn()->close(); // CLOSE THE CONNECTION
        return $result; // RETURN RESULT
    }
}

?>