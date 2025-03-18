<?php

class Conn {

    protected $db;

    function __construct()
    {
        // echo "CONN";
        $this->db = new SQLite3(__DIR__ . '/pombo.db');
    }

    public function get_all_post()
    {
        
        $data = $this->db->query("SELECT * FROM posts");
        
        $rows = [];
        while ($row = $data->fetchArray(SQLITE3_ASSOC)) 
        {
            $rows[] = $row;
        }

        return $rows;
    }

    
}