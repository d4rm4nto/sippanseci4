<?php

namespace App\Controllers;

use App\Models\MRegistrasi;

class RegistrasiController extends RestfullController
{

    public function registrasi()
    {
        $data = [
            'role_id' => 2,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash(
                $this->request->getVar('password'),
                PASSWORD_DEFAULT
            )
        ];

        $model = new MRegistrasi();
        $model->save($data);
        return $this->responseHasil(200, true, "Registrasi Berhasil");
    }
}
