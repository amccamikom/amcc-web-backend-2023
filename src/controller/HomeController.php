<?php

namespace AMCC\MVC\Controller;

use AMCC\MVC\Model\Mahasiswa;
use AMCC\MVC\View\Page;

class HomeController
{
    public function index()
    {
        Page::render('welcome_page', [
            'nama' => 'Member Backend',
        ]);
    }

    public function about()
    {
        Page::render('about_page');
    }

    public function listMahasiswa()
    {
        $data = [
            new Mahasiswa('Ahmad Basikal', '22.99.9999'),
            new Mahasiswa('Tulung Agung', '22.77.7777'),
        ];

        Page::render('list_mahasiswa', [
            'mahasiswa' => $data,
        ]);
    }
}
