<?php 
namespace App\Model\Table;

class CompetitionTable extends Table
{
    protected $table ='competition';

    public function all()
    {
        return $this->query(" SELECT 
        c.id ID, c.name_compet, c.link_compet, c.level, c.info_manager, c.detail, c.picture, c.picture2, c.date, c.time, l.id, l.title, l.percentage, l.color, l.stars, l.number_stars, m.id Id, m.name, m.email, m.number_phone, m.sex, m.nationality, m.year_b, m.date
        FROM competition c,  level_competition  l, manager  m 
        WHERE c.level = l.id AND c.info_manager = m.id
        ORDER BY c.id DESC
        ");
    }

    public function lastCompetition()
    {
        return $this->query(" SELECT 
        c.id ID, c.name_compet, c.link_compet, c.level, c.info_manager, c.detail, c.picture, c.picture2, c.date, c.time, l.id, l.title, l.percentage, l.color, l.stars, l.number_stars, m.id Id, m.name, m.email, m.number_phone, m.sex, m.nationality, m.year_b, m.date
        FROM competition c,  level_competition  l, manager  m 
        WHERE c.level = l.id AND c.info_manager = m.id
        ORDER BY c.id DESC LIMIT 0,1
        ");
    }
    public function find($id)
    {
        return $this->query(" SELECT 
        c.id ID, c.name_compet, c.link_compet, c.level, c.info_manager, c.detail, c.picture, c.picture2, c.date dt, c.time, l.id, l.title, l.percentage, l.color, l.stars, l.number_stars, m.id Id, m.name, m.email, m.number_phone, m.sex, m.nationality, m.year_b, m.date
        FROM competition c,  level_competition  l, manager  m 
        WHERE c.level = l.id AND c.info_manager = m.id AND c.id =?
        ",[$id],true);
    }
    public function findCompetition($id)
    {
        return $this->query('SELECT * FROM '. $this->table.' WHERE id =?',[$id],true);
    }
}