<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterCRUD extends Model
{

    protected $table = 'footer';
    protected $protected = ['name'];
    protected $fillable = ['about_us', 'address'];
    public $timestamps = false;

}
