<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'faktury';

    protected $allowedFields = ['nr_zlecenia', 'typ', 'rodzaj_platnosci', 'termin_platnosci', 'data_wystawienia'];
}
