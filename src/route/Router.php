<?php

namespace AMCC\MVC\Route;

class Router
{
    // awal mula tidak ada route yang tersimpan
    // kita bisa menambahkannya nanti
    public static array $routes = [];

    // method add dibawah ini digunakan untuk menambahkan route baru
    // dan menyimpannya di variabel $routes
    public static function add(string $requestMethod, string $path, string $controller, string $method)
    {
        // kita simpan route kedalam variabel $routes
        // karena variabel $routes adalah static maka kita membutuhkan keyword self untuk mengaksesnya
        self::$routes[] = [
            'requestMethod' => $requestMethod,
            'path' => $path,
            'controller' => $controller,
            'method' => $method,
        ];
    }

    // method run dibawah ini digunakan untuk menjalankan route yang sesuai dengan
    // path dan request method-nya
    public static function run()
    {
        $path = '/'; // default path
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        if (isset($_SERVER['PATH_INFO'])) {
            // cek apakah variabel global $_SERVER['PATH_INFO'] mempunyai nilai
            // variabel global $_SERVER['PATH_INFO'] menyimpan info path yang sedang kita akses
            // misalnya /category, /product dan lain lain
            $path = $_SERVER['PATH_INFO']; // jika ada maka timpa default path dengan yang baru
        }

        // lakukan perulangan untuk mencari route yang sesuai dengan path dan request method
        foreach (self::$routes as $route) {
            if ($route['path'] === $path && $route['requestMethod'] === $requestMethod) {

                // buat instance controller yang tersimpan di $routes
                $controller = new $route['controller'];

                // ambil method yang tersimpan di $routes
                // kita gunakan untuk memanggil method dari suatu controller
                $method = $route['method'];

                // panggil method milik controller
                $controller->$method();

                return; // return untuk menghentikan perulangan
            }
        }
    }
}
