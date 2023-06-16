<?php

class Home extends Controllers{
    public function index(){
        $data['judul'] = 'Daftar Produk';
        $data['barang'] = $this->model('Produk_model')->getAllProduk();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');

    }
}