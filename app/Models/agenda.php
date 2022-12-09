<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;
    protected $table = 'agendas';
    protected $fillable = [
        'user_id',
        'shalat_subuh',
        'shalat_dzuhur',
        'shalat_ashar',
        'shalat_maghrib',
        'shalat_isya',
        'shalat_dhuha',
        'shalat_tahajud',
        'dzikir_pagi',
        'dzikir_sore',
        'istighfar',
        'shalawat',
        'berbuat_baik',
        'ceramah',

    // 'user_id',
    // 'shalat',
    // 'dzikir',
    // 'berbuat_baik',
    // 'ceramah',
];

public function user()
{
    return $this->belongsTo(User::class);
}

}
