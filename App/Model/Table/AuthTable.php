<?php 
namespace App\Model\Table;

class AuthTable extends Table 
{
    protected $table = 'admin';

    /**
     * Undocumented function
     *
     * @param [type] $username
     * @param [type] $userpassword
     * @return void
     */
    public function login($username,$userpassword)
    {
        return $this->query('SELECT * FROM '.$this->table.' WHERE   name =? AND password=?',[$username,$userpassword]);
    }
}