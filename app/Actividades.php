<?php

namespace Vitis;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    public $timestamps = false;
    protected $fillable = ['titulo', 'fecha', 'img'];
}
