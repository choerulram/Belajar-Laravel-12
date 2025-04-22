<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // inisialisasi tabel product
    protected $table = 'tb_product';

    // inisialisasi primary key di dalam tabel
    protected $primaryKey = 'id_product';

    // inisialisasi data yang dapat kita isi
    protected $fillable = ['product_name', 'description', 'price', 'stock'];

    // inisialisasi data yang tidak boleh kita isi
    protected $guarded = ['id_product'];

}
