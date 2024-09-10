<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCRUD extends Model
{
    protected $table = 'products';
    protected $primarykey = 'id_prd';
    protected $fillable = ['ctg_id', 'img_prd', 'nama_prd', 'hrg_prd', 'garansi_prd', 'processor_prd', 'memory_prd', 'storage_prd', 'graphic_prd', 'display_prd', 'os_prd'];
    public $timestamps = true;
}
