<?php

namespace App\Controllers;

use App\Models\MSiswa;

use CodeIgniter\Database\Query;

class GetDataSiswaController extends RestfullController
{

    public function GetData()
    {
        $model = new MSiswa();
        $query =  $model->table('pendaftar')
            ->join('user', 'user.id_user = pendaftar.id_user', 'LEFT')
            ->join('jurusan', 'pendaftar.id_jurusan = jurusan.id')
            ->find();


        // $query = $model->getData()->find();
        return $this->responseHasil(200, true, $query);
    }
}
