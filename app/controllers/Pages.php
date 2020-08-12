<?php

class Pages
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function about($id, $id2)
    {
        echo 'This is About page' . '-';
        echo $id . '-';
        echo $id2 . '-';
    }
}
