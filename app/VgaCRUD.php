<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VgaCRUD extends Model
{
    protected $table = 'prd_vga';
    protected $primarykey = 'vga_id';
    protected $fillable = ['vga_name'];
}
