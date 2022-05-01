<?php 
namespace App\Model\Table;

class NoticeTable extends Table
{
    protected $table = 'notice';

    public function noticeSelect()
    {
        return $this->query('SELECT * FROM '.$this->table.' ORDER BY date DESC LIMIT 0,2');
    }
    public function all()
    {
        return $this->query('SELECT * FROM '.$this->table.' ORDER BY date DESC');
    }
}