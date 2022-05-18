<?php 
namespace App\Model\Table;

class AuthTable extends Table
{
    protected $table = 'users';

    public function findMail($mail)
    {
        return $this->query('SELECT * FROM '.$this->table.' WHERE mail=?',[$mail],false);
    }
    public function findName($name)
    {
        return $this->query('SELECT * FROM '.$this->table.' WHERE username=?',[$name],false);
    }
    
}