<?php 
namespace App\Model\Table;

class ServiceTable extends Table
{
    protected $table = 'service';

    public function allDESC()
    {
        return $this->query('SELECT * FROM '.$this->table.' ORDER BY id DESC');
    }
}