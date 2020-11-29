<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'klienci';

    protected $allowedFields = ['id', 'nazwa_firmy', 'nip'];
}
