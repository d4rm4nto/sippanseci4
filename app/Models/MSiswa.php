<?php

namespace App\Models;

use CodeIgniter\Model;

class MSiswa extends Model
{
    protected $table = 'pendaftar';
    // public function getData()
    // {
    //     $query =  $this->db->table('user')
    //         ->join('pendaftar', 'user.id_user = pendaftar.id_user')
    //         ->join('jurusan', 'pendaftar.id_jurusan = jurusan.id')
    //         ->get();
    //     return $query;
    // }
}
