<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinkCRUD extends Model
{

    protected $table = 'link';
    protected $fillable = ['name', 'id_footer'];
    public $timestamps = false;

}
