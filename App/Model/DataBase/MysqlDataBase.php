<?php 
namespace App\Model\DataBase;
use \PDO;

class MysqlDatabase
{
    private $db_name,
            $db_user,
            $db_pass,
            $pdo;

    public function __construct($db_name='draya', $db_user = 'root', $db_pass ='', $db_host ='localhost')
    {
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_pass = $db_pass;
        $this->db_user = $db_user;
        
    }

    public function _pdo()
    {
        $this->getPDO();
    }

    protected function getPDO()
    {
        if($this->pdo===null)
        {
            $pdo = new PDO('mysql:host=localhost;dbname=draya','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    
    }
    

    public function request($statement, $attribute=null, $one=false)
    {
        if($attribute)
        {
            $req = $this->getPDO()->prepare($statement);
            $req->execute($attribute);
            $req->setFetchMode(PDO::FETCH_OBJ);
            
            if($one)
            {
                $datas = $req->fetch();
            }
            else{
                $datas= $req->fetchAll();
            }
            return $datas;
        }
        else{
                $req =  $this->getPDO()->query($statement);
                $req->setFetchMode(PDO::FETCH_OBJ);
                

                if($one)
                {
                    $datas = $req->fetch();
                }
                else{
                    $datas= $req->fetchAll();
                }
                return $datas;
        }
        
    }

}