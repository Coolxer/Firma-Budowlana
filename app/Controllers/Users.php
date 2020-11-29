<?php

namespace App\Controllers;

use App\Models\PersonalDataModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    public function login()
    {
        $model = new PersonalDataModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
            'firstname' => 'required|max_length[50]',
            'lastname' => 'required|max_length[50]',
            'pesel' => 'required|min_length[11]|max_length[11]',
            'phone' => 'required|min_length[11]|max_length[11]',
            'email' => 'required|max_length[30]',
            'role' => 'required',
        ])) {
            $model->save([
                'Imie' => $this->request->getPost('firstname'),
                'Nazwisko' => $this->request->getPost('lastname'),
                'Pesel' => $this->request->getPost('pesel'),
                'Nr_telefonu' => $this->request->getPost('phone'),
                'Email' => $this->request->getPost('email'),
                'Rola' => $this->request->getPost('role'),
            ]);

            echo view('users/login/success');
        } else {
            echo view('templates/header');
            echo view('users/login/form');
            echo view('templates/footer');
        }
    }
}
