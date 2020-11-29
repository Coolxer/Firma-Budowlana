<?php

namespace App\Models;

use CodeIgniter\Model;

class NotificationModel extends Model
{
    protected $table = 'zgloszenia';

    protected $allowedFields = ['autor_zgloszenia', 'opis', 'data_utworzenia'];
}
