<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

        protected $primaryKey = 'code_matkul';

        protected $table = 'matakuliah';

        protected $fillable = [
        'code_matkul',
        'matkul',
        'sks'
    ];
}
