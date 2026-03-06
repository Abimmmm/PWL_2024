<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    protected $table = 'm_level';  // Tentukan nama tabel
    protected $primaryKey = 'id_level'; // Jika primary key bukan 'id'
}
