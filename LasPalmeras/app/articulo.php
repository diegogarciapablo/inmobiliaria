<?php

namespace Palmeras;

use Illuminate\Database\Eloquent\Model;

class articulo extends Model
{
	protected $fillable = [
		'valor','ci_cliente','descripcion','fecha_lim'
	];
}
