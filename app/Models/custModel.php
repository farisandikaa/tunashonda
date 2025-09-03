<?php

namespace App\Models;

use CodeIgniter\Model;

class custModel extends Model
{
    protected $table      = 'pembeli';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama', 'alamat', 'kecamatan', 'kabupaten', 'no_telepon', 'slug', 'unit', 'status', 'rencana'
    ];

    public function getCust($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
