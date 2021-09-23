<?php

//    This is changed by Madhavan
class User
{
    private $con;
    
    function __construct()
    {
        include_once('../database/db.php');
        $db = new Database();
        $this->con = $db->connect();
    }   
    
    //Check Whether User is already exist
    private function emailExists($email){
            $pre_stmt = $this->con->prepare("SELECT user_id FROM user WHERE email = ? ");
            $pre_stmt->bind_param("s",$email);
            $pre_stmt->execute() or die($this->con->error);
            $result = $pre_stmt->get_result();

            if ($result->num_rows > 0) {
                return 1;
            }
            else{
                return 0;
            }
        }

        public function createUserAccount($username,$email,$password,$usertype){
            if ($this->emailExists($email)) {
                return "EMAIL_ALREADY_EXISTS";
            }
            else{
                $pass_hash = password_hash($password,PASSWORD_BCRYPT,["cost"=>8]);
                $date = date("Y-m-d");
                $notes = "";

                $pre_stmt = $this->con->prepare("INSERT INTO `user`( `username`, `email`, `password`, `usertype`, `register_date`, `last_login`, `notes`) VALUES (?,?,?,?,?,?,?)");
                
                $pre_stmt->bind_param("sssssss",$username,$email,$pass_hash,$usertype,$date,$date,$notes);

                $result = $pre_stmt->execute() or die($this->con->error);

                if ($result) {
                    return $this->con->insert_id;
                }
                else{
                    return "SOME_ERROR";
                }
            }
            
        }

        public function userLogin($email,$password){
            $pre_stmt = $this->con->prepare("SELECT user_id,username,password,last_login FROM user WHERE email = ?");
            $pre_stmt->bind_param("s",$email);
            $pre_stmt->execute() or die($this->con->error);
            $result = $pre_stmt->get_result();

            if($result->num_rows < 1 ){
                return "NOT_REGISTERD";
            }else {
                $row = $result->fetch_assoc();
                if(password_verify($password,$row["password"])){
                    $_SESSION["user_id"] = $row["user_id"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["last_login"] = $row["last_login"];
                    //here we are updating user last login time and date
                    $last_login = date("Y-d-m h:m:s");
                    $pre_stmt =$this->con->prepare("UPDATE user SET last_login = ? WHERE email =?");
                    $pre_stmt->bind_param("ss",$last_login,$email);
                    $result= $pre_stmt->execute() or die($this->con->error);
                    if($result){
                        return 1;
                    }else {
                        return 0;
                    }
                   
                } else {
                    return "PASSWORD_NOT_MATCHED";
                }
            }
        }
    
}

//$obj = new User();
//echo $obj->createUserAccount("karthicrajan","karthicrajan2002@gmail.com","karthicrajan","admin");
//echo $obj->userLogin("karthicrajan@gmail.com","karthicrajan");
// echo $_SESSION["username"];
?>
