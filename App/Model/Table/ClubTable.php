<?php
namespace App\Model\Table;

class ClubTable extends Table
{
    protected $table = 'club';
    public function all()
    {
        return $this->query('select * from ' .$this->table.' order by id desc');
    }
}