<?php

namespace App\Models;

use CodeIgniter\Model;

class galeriModel extends Model
{
    protected $table      = 'galeri';
    protected $useTimestamps = false;
    protected $allowedFields = [
        'slug', 'sampul', 'caption', 'nama'
    ];

    public function getGaleri($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
