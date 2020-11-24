<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'danepersonalne';

    protected $allowedFields = ['Imie', 'Nazwisko', 'Pesel', 'Nr_telefonu', 'Email', 'Rola'];

    public function getUsers($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->asArray()
            ->where(['slug' => $slug])
            ->first();
    }
}
