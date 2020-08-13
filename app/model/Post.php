<?php


class Post
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        $this->db->query('SELECT * FROM users');
    }
}
