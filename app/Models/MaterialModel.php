<?php

namespace App\Models;

use CodeIgniter\Model;

class MaterialModel extends Model
{
    protected $table = 'materialy';

    protected $allowedFields = ['nazwa', 'ilosc', 'wartosc', 'zarezerwowany_dla', 'dostepny_w'];
}
