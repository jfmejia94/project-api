<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Nombre de la tabla en MySQL.
	protected $table="courses";

	// Atributos que se pueden asignar de manera masiva.
	protected $primaryKey = 'id';

	protected $fillable = array('id','name','code','created_at','updated_at');
	
	// Aquí ponemos los campos que no queremos que se devuelvan en las consultas.
	protected $hidden = ['created_at','updated_at']; 

	// Definimos a continuación la relación de esta tabla con otras.
	// Ejemplos de relaciones:
	// 1 usuario tiene 1 teléfono   ->hasOne() Relación 1:1
	// 1 teléfono pertenece a 1 usuario   ->belongsTo() Relación 1:1 inversa a hasOne()
	// 1 post tiene muchos comentarios  -> hasMany() Relación 1:N 
	// 1 comentario pertenece a 1 post ->belongsTo() Relación 1:N inversa a hasMany()
	// 1 usuario puede tener muchos roles  ->belongsToMany()
	//  etc..

	// Relación de Fabricante con Aviones:
	public function users()
	{	
		// 1 fabricante tiene muchos aviones
		// $this hace referencia al objeto que tengamos en ese momento de Fabricante.
		return $this->belongsTo('App\Users','user_id');
	}

	public function teachers()
	{	
		// 1 fabricante tiene muchos aviones
		// $this hace referencia al objeto que tengamos en ese momento de Fabricante.
		return $this->belongsTo('App\Teachers', 'teacher_id');
	}

	public function universities()
	{	
		// 1 fabricante tiene muchos aviones
		// $this hace referencia al objeto que tengamos en ese momento de Fabricante.
		return $this->belongsTo('App\University', 'university_id');
	}
}
