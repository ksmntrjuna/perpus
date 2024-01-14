<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota';
    protected $fillable = ['nama', 'email', 'no_hp', 'alamat'];

    // public static $rules = [
    //     'nama' => 'required|string|max:255',
    //     'email' => 'required|email',
    //     'no_hp' => 'required|string|max:15',
    //     'alamat' => 'required|string|max:255',
    // ];

    // public static function validate($data)
    // {   
    //     return validator($data, self::$rules);
    // }

}
