<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'pracownicy';

    protected $allowedFields = ['id', 'grupa_robocza', 'obslugiwana_maszyna', 'wynagrodzenie'];
}
