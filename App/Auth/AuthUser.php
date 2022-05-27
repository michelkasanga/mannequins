<?php 
namespace App\Auth;
use \App\Model\DataBase\MysqlDatabase;

class AuthUser  
{
    private $db;
    public function __construct(MysqlDatabase $db)
    {
        $this->db = $db;
    } 

    public function getUserId()
    {
        if($this->logged())
        {
            return $_SESSION['auth'];
        } 
        return false;  
    }
    /**
     * @param $name
     * @param $password
     * return boolean
    */
    public function login($name,$password)
    {
        $user = $this->db->request('SELECT * FROM users WHERE mail=? OR username=?',[$name,$name],true);
         
        if($user)
        {
            
            if($user->password ===  sha1($password))
            {
                $_SESSION['auth'] = $user->id;
                return true;
            }
        }
        return false;
    }

    public function logged()
    {
        return isset($_SESSION['auth']);
    }


}  