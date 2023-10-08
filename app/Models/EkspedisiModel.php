<?php

namespace App\Models;

use CodeIgniter\Model;

class EkspedisiModel extends Model
{
    protected $table      = 'id_ekspedisi';
    protected $primaryKey = 'nama_ekspedisi';

    protected $useAutoIncrement = false;

    protected $allowedFields = [
        'id_ekspedisi',
        'nama_ekspedisi',
    ];
}