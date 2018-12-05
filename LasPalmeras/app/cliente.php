<?php

namespace Palmeras;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
	protected $fillable = [
		'ci','nombres','apellidos','direccion','telefono','slug'
	];
	public function getRouteKeyName()
	{
		return 'slug';
	}
}
