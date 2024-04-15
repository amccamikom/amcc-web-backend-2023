<?php

namespace AMCC\MVC\Model;

class Mahasiswa
{
    public $nama;
    public $nim;

    public function __construct($nama, $nim)
    {
        $this->nama = $nama;
        $this->nim = $nim;
    }
}
