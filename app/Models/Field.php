<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;
use Illuminate\Validation\Rule;


enum FieldValueKind {
    case single_line;
    case single_line_list;
    case mutli_line;
}

class Field extends Model
{

    use ValidatingTrait;


    /* protected $rules = [
		'question'   => 'required|unique:fields,question|max:10',
        'value_kind' => 'required|in:single_line,single_line_list,mutli_line',
	];
	]; */

    protected $casts = [
        'value_kind' => FieldValueKind::class,
    ];

    protected $fillable = ['question', 'value_kind'];


    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }


}
