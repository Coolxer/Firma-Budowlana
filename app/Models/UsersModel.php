<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'danepersonalne';

    protected $allowedFields = ['Imie', 'Nazwisko', 'Pesel', 'Nr_telefonu', 'Email', 'Rola'];
}
