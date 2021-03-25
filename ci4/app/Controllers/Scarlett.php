<?php

namespace App\Controllers;

use App\Models\ScarlettModel;

class Scarlett extends BaseController
{
    protected $scarlettModel;
    public function __construct()
    {
        $this->scarlettModel = new ScarlettModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Produk',
            'scarlett' => $this->scarlettModel->getScarlett()
        ];

        return view('Scarlett/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Produk',
            'scarlett' => $this->scarlettModel->getScarlett($slug)
        ];
        return view('scarlett/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Produk'
        ];

        return view('scarlett/create', $data);
    }
}
