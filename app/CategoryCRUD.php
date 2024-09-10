<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryCRUD extends Model
{
    protected $table = 'categories';
    protected $primarykey = 'ctg_id';
    protected $fillable = ['ctg_img','ctg_name'];
}
