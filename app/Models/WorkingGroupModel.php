<?php

namespace App\Models;

use CodeIgniter\Model;

class WorkingGroupModel extends Model
{
    protected $table = 'grupy_robocze';

    protected $allowedFields = ['kierownik', 'specjalizacja'];
}
