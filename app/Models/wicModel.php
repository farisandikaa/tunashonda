<?php

namespace App\Models;

use CodeIgniter\Model;

class wicModel extends Model
{
    protected $table      = 'wic';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama', 'no_telpon', 'alamat', 'email', 'unit', 'warna_unit', 'rencana', 'sales', 'status', 'slug'
    ];

    public function getWic($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function search($keyword)
    {
        $builder = $this->table('wic');
        $builder->like('sales', $keyword);
        return $builder;
    }
}
