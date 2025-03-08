<?php

class Planet
{
    protected MyPDO $db;

    protected $data;

    public function __construct(MyPDO $db)
    {
        $this->db = $db;
    }

    public function find($id)
    {        
        $this->data = $this->db->run("SELECT * FROM planets WHERE id = ?", [$id])->fetch();
    }
}