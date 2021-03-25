<?php

namespace App\Models;

use CodeIgniter\Model;

class ScarlettModel extends Model
{
    protected $table      = 'scarlett';
    protected $useTimestamps = true;
    protected $allowedfields = ['nama', 'slug', 'manfaat', 'harga', 'sampul'];

    public function getScarlett($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
