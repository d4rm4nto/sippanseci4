<?php

namespace App\Models;

use CodeIgniter\Model;

class MLogin extends Model
{
    protected $table = 'siswa_token';
    protected $allowedFields = ['member_id', 'auth_key'];
}
