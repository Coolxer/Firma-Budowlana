<?php

namespace App\Models;

use CodeIgniter\Model;

class TaskModel extends Model
{
    protected $table = 'zlecenia';

    protected $allowedFields = ['nr_oferty', 'kierownik', 'etap', 'postep'];
}
