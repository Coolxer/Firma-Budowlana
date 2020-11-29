<?php

namespace App\Models;

use CodeIgniter\Model;

class OfferModel extends Model
{
    protected $table = 'oferty';

    protected $allowedFields = ['nr_zgloszenia', 'szacunkowy_koszt', 'termin', 'zaakceptowana'];
}
