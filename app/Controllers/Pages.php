<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function __construct()
    {
        session_start();
        $_SESSION['logged'] = false;

        // to remove [develop only]
        $_SESSION['logged'] = true;
        $_SESSION['role'] = 'kierownik';
    }

    public function index()
    {
        $this->view('home');
    }

    public function view($page = 'home')
    {
        if (!is_file(APPPATH . '/Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('templates/header', $data);
        echo view('pages/' . $page, $data);
        echo view('templates/footer', $data);
    }
}
