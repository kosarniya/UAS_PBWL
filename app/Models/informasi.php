<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;

    protected $table = 'informasi';
    protected $primarykey = 'id';
    protected $fillable =['jenis_id', 'wargas_id', 'desc', 'status', 'publish_date'];

    //relasi ke jenis//
    public function Jenis()
    {
        return $this->belongsTo(jenis::class);
    }

    //relasi ke warga//
    public function Wargas()
    {
        return $this->belongsTo(warga::class);
    }
}
