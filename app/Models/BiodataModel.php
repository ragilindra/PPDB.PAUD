<?php

namespace App\Models;

use CodeIgniter\Model;


class BiodataModel extends Model
{
    
    protected $table = 'biodata';
    protected $primaryKey = 'biodata_id';
    protected $allowedFields = ['biodata_id', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'id'];
}