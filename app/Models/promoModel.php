<?php

namespace App\Models;

use CodeIgniter\Model;

class promoModel extends Model
{
    protected $table      = 'promo';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'slug', 'sampul', 'caption', 'nama'
    ];

    public function getPromo($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
