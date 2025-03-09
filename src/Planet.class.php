<?php

class Planet
{
    protected MyPDO $db;

    public $data;

    public function __construct(MyPDO $db)
    {
        $this->db = $db;
    }

    public function all()
    {        
        $this->data = $this->db->run("SELECT * FROM planets")->fetchAll();
    }

    public function find($id)
    {        
        $this->data = $this->db->run("SELECT * FROM planets WHERE id = ?", [$id])->fetch();
    }
}