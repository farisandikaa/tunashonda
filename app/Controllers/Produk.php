<?php

namespace App\Controllers;

use App\Models\custModel;
use App\Models\motorModel;

class Produk extends BaseController
{

    protected $custModel;
    protected $motorModel;

    public function __construct()
    {
        $this->motorModel = new motorModel();
        $this->custModel = new custModel();
    }


    public function index()
    {
        //$komik = $this->motorModel->findAll();

        $data = [
            'title' => 'Produk | Tunas Honda Sukabumi',
            'motor' => $this->motorModel->getMotor()
        ];

        // $motorModel = new \App\Models\motorModel();
        return view('produk/index', $data);
    }




    public function detasil($slug)
    {
        $data = [
            'title' => 'Detail Motor',
            'motor' => $this->motorModel->getMotor($slug)
        ];

        if (empty($data['motor'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Tipe Motor ' . $slug . ' tidak ditemukan.');
        }
        return view('produk/detail', $data);
    }
}
