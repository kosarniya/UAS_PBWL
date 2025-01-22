<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    use HasFactory;

    protected $table = 'wargas';
    protected $primarykey = 'id';
    protected $fillable =['nama', 'alamat', 'tanggal_lahir'];
}
