<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku extends Model
{
    use HasFactory;
    protected $guarded =['id']; //MENGATUR HANYA COLUMN ID YANG TIDAK BOLEH DI ISI

    /*--------RELASI ANTAR TABLE-------*/
     // RELASI DARI MODEL BUKU KE KATEGORI BUKU
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }
}