<?php

namespace App\Controllers;

class Loginsales extends BaseController
{
    public function index()
    {
        $modelAdmin = new \App\Models\salesModel();
        $login = $this->request->getPost('loginsales');
        if ($login) {
            $admin_username = $this->request->getPost('username');
            $admin_password = $this->request->getPost('password');
            $admin_name = $this->request->getPost('nama');

            if ($admin_username == '' or $admin_password == '') {
                $err = "Silahkan isi username dan password";
            }
            if (empty($err)) {
                $dataAdmin = $modelAdmin->where("username", $admin_username)->first();
                if ($dataAdmin['password'] != md5($admin_password)) {
                    $err = 'Password tidak sesuai';
                }
            }
            if (empty($err)) {
                $dataSesi = [
                    'id' => $dataAdmin['id'],
                    'username' => $dataAdmin['username'],
                    'password' => $dataAdmin['password'],
                ];
                session()->set($dataSesi);
                return redirect()->to('sales/dashboard/index');
            }
            if ($err) {
                session()->setFlashdata('username', $admin_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("loginsales");
            }
        }
        return view('login_sales');
    }
}
