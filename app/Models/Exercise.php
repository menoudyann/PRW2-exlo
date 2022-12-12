<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Watson\Validating\ValidatingTrait;

enum ExerciseState {
    case building;
    case answering;
    case closed;
}

class Exercise extends Model
{
    use ValidatingTrait;

    protected $rules = [
		'title'   => 'required|unique:exericses|max:10',
	];

    protected $fillable = ['title'];
    
    protected $casts = [
        'state' => ExerciseState::class,
    ];


    public function fields()
    {
        return $this->hasMany(Field::class);
    }

}
