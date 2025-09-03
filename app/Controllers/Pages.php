<?php

namespace App\Controllers;

use App\Models\galeriModel;
use App\Models\promoModel;

class Pages extends BaseController
{
    protected $promoModel;
    protected $galeriModel;
    public function __construct()
    {
        $this->promoModel = new promoModel();
        $this->galeriModel = new galeriModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Home | Tunas Honda Sukabumi'
        ];

        return view('pages/home', $data);
    }



    public function galeri()
    {
        $data = [
            'title' => 'Daftar Promo',
            'galeri' => $this->galeriModel->getGaleri()
        ];

        return View('pages/galeri', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang kami | Tunas Honda Sukabumi',

        ];
        return View('pages/about', $data);
    }
    public function promo()
    {
        $data = [
            'title' => 'Daftar Promo',
            'promo' => $this->promoModel->getPromo()
        ];

        return View('pages/promo', $data);
    }
}
