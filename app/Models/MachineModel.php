<?php

namespace App\Models;

use CodeIgniter\Model;

class MachineModel extends Model
{
    protected $table = 'maszyny';

    protected $allowedFields = ['nazwa', 'sprawna', 'zajeta'];
}
