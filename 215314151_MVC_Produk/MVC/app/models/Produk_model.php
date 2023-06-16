<?php

class Produk_model{
    private $table = 'produk';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllProduk(){
        $this->db->query('SELECT * FROM '.$this->table);
        return $this->db->resultSet();
    }

    public function getProdukById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' Where ID=:ID');
        $this->db->bind('ID', $id);
        return $this->db->single();
    }
}