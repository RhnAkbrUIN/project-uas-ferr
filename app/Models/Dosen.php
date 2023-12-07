<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $primaryKey = 'nip';

    protected $table = 'dosen';

        protected $fillable = [
        'nip',
        'name_dosen',
        'jk',
        'code_matkul',
        ];
}
