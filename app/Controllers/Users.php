<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class users extends Controller
{
    public function index()
    {
        $model = new UsersModel();

        $data = [
            'users'  => $model->getUsers(),
            'title' => 'Users',
        ];

        echo view('templates/header', $data);
        echo view('users/overview', $data);
        echo view('templates/footer', $data);
    }

    public function view($slug = null)
    {
        $model = new UsersModel();

        $data['users'] = $model->getUsers($slug);

        if (empty($data['users'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the users: ' . $slug);
        }

        $data['title'] = $data['users']['title'];

        echo view('templates/header', $data);
        echo view('users/view', $data);
        echo view('templates/footer', $data);
    }

    public function create()
    {
        $model = new UsersModel();

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

            echo view('users/success');
        } else {
            echo view('templates/header', ['title' => 'Create a user']);
            echo view('users/create');
            echo view('templates/footer');
        }
    }
}
