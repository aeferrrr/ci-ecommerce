<?php

namespace App\Models;

use CodeIgniter\Model;

class StatusModel extends Model
{
    protected $table      = 'status';
    protected $primaryKey = 'id_status';

    protected $useAutoIncrement = true;

    protected $allowedFields = [
        'id_status',
        'nama_status'
    ];
}
