<?php

namespace App\Models;

use CodeIgniter\Model;

class WarehouseModel extends Model
{
    protected $table = 'magazyny';

    protected $allowedFields = ['nazwa', 'adres', 'stan_wypelnienia'];
}
