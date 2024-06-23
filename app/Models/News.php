<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $guarded = ['id'];

    // relationship with Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function scopeFilterByKategori($query, $id_kategori)
    {
        return $query->where('id_kategori', $id_kategori);
    }

    public static function searchByName($keyword)
    {
        return News::where('name', 'LIKE', "%$keyword%")->get();
    }
}
