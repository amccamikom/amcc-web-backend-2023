<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    private static $books = ['Buku1', 'Buku2', 'Buku3', 'Buku4', 'Buku5'];
    
    public static function get_all()
    {
        return self::$books;
    }
}