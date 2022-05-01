<?php
namespace App\Model\Table;

class ManagerTable extends Table
{
    protected $table = 'manager';

    public function all()
    {
        return $this->query('select * from ' .$this->table.' order by id desc');
    }
}