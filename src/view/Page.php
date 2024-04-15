<?php

namespace AMCC\MVC\View;

class Page
{
    public static function render(string $view, $data = [])
    {
        extract($data);

        require __DIR__ . '/../../views/' . $view . '.php';
    }
}
