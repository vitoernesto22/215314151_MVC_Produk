<?php

class Produk extends Controllers{

    public function detail($id){
        $data['judul'] = 'Detail Produk';
        $data['barang'] = $this->model('Produk_model')->getProdukById($id);
        $this->view('templates/header', $data);
        $this->view('produk/detail', $data);
        $this->view('templates/footer');

    }
}