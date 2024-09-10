<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessorCRUD extends Model
{
    protected $table = 'prd_processor';
    protected $primarykey = 'prc_id';
    protected $fillable = ['prc_name'];
}
