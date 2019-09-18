<?php

namespace Vitis;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	public $timestamps = false;
    protected $fillable = ['titulo', 'descripcion', 'img'];
}
