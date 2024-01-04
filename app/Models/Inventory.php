<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Inventory extends Model
{
    use HasFactory;
    var $data;
    protected $table = 'inventories';

    protected $fillable = [
        'kode_barang', 'nama_barang', 'penempatan', 'qr_code'
    ];
}
