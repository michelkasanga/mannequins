<?php 
namespace App\Model\Table;

class CommentTable extends Table
{
    protected $table = 'Comment_news';

    public function find($id)
    {
        return $this->query("SELECT 
            c.id, c.address_ip, c.name, c.comment, c.news_id, c.date as temp_date, c.time as temp,     n.id, n.title, n.content, n.picture, n.date,n.time
            FROM comment_news as c 
            JOIN news as n
            ON c.news_id=n.id
            WHERE c.news_id=?
        ", [$id]);
    }
    public function find_ip($id)
    {
        return $this->query("SELECT *  FROM {$this->table} WHERE address_ip =? ORDER BY id DESC LIMIT 0,1 ", [$id]);
    }
}
