<?php

namespace App\Models;

use CodeIgniter\Model;

class ManagerModel extends Model
{
    protected $table = 'kierownicy';

    protected $allowedFields = ['id', 'wynagrodzenie'];
}
