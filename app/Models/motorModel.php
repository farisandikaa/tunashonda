<?php

namespace App\Models;

use CodeIgniter\Model;

class motorModel extends Model
{
    protected $table      = 'motor';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kategori', 'slug', 'tipe', 'sampul', 'harga', 'stok', 'foto_360', 'foto_1', 'foto_2', 's_bahan_bakar',
        'varian1', 'varian2', 'varian3', 'varian4', 'varian5', 'varian6', 'varian7', 'varian8', 'varian9', 'varian10',
        'banner_aksesoris', 'tipe_mesin', 'volume_langkah', 'diameter_langkah', 'tipe_transmisi', 'rasio_kompresi',
        'daya_maks', 'torsi_maks', 'tipe_starter', 'tipe_kopling', 'tipe_rangka', 'tipe_suspensi_depan',
        'tipe_suspensi_belakang', 'ukuran_ban_depan', 'ukuran_ban_belakang', 'rem_depan', 'rem_belakang',
        'sistem_pengereman', 'panjang_lebar_tinggi', 'tinggi_tempat_duduk', 'jarak_terendah',
        'crub_weight', 'kapasitas_tangki', 'kapasitas_minyak', 'tipe_baterai', 'sistem_pengapian', 'tipe_busi'
    ];

    public function getMotor($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
