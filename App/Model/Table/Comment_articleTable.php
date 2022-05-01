<?php 
namespace App\Model\Table;

class Comment_articleTable extends Table
{
    protected $table = 'comment_article';

    public function find($id)
    {
        return $this->query("SELECT 
            c.id, c.address_ip, c.name, c.comment, c.article_id, c.date as t_date, c.time as temp_time,     a.id, a.title, a.content, a.picture, a.date, a.time
            FROM comment_article as c 
            JOIN article as a
            ON c.article_id=a.id
            WHERE c.article_id=?
            ORDER BY c.id DESC
        ", [$id]);
    }
    public function find_ip($id)
    {
        return $this->query("SELECT *  FROM {$this->table} WHERE address_ip =? ORDER BY id DESC LIMIT 0,1 ", [$id]);
    }
}