<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalDataModel extends Model
{
    protected $table = 'dane_personalne';

    protected $allowedFields = ['imie', 'nazwisko', 'pesel', 'nr_telefonu', 'email', 'rola'];
}
