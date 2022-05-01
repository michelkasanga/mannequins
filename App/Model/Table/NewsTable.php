<?php 
namespace App\Model\Table;

class NewsTable extends Table
{
    protected $table = 'news';

    public function lastNews()
    {
        return $this->query('select * from '.$this->table.' order by date desc limit 0,10' );
    }
    public function all()
    {
        return $this->query('select * from '.$this->table.' order by date desc ' );
    }
    public function deleteComment($id)
    {
            return $this->query("DELETE FROM comment_news
            WHERE news_id=?
        ", [$id]);
    }
    
}