<?php

namespace App\Controllers;


use App\Models\CustModel;
use App\Models\motorModel;

class Beli extends BaseController

{
    protected $custModel;

    public function __construct()
    {

        $this->custModel = new CustModel();
        $this->motorModel = new motorModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Formulir Pembelian',
            'motor' => $this->motorModel->getMotor()
        ];

        return view('beli/beli', $data);
    }

    public function save()
    {


        $slug = url_title($this->request->getPost('nama'), '-', true);
        $this->custModel->save([
            'nama' => $this->request->getPost('nama'),
            'slug' => $slug,
            'unit' => $this->request->getPost('unit'),
            'alamat' => $this->request->getPost('alamat'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'kabupaten' => $this->request->getPost('kabupaten'),
            'rencana' => $this->request->getPost('rencana'),
        ]);
        session()->setFlashdata('pesan', 'data berhasil dimasukan, silahkan tunggu beberapa saat admin akan menghubungi anda segera :)');

        return redirect()->to('produk');
    }
}
