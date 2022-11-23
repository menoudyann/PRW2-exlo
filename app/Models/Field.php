<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

enum FieldValueKind {
    case single_line;
    case single_line_list;
    case mutli_line;
}

class Field extends Model
{
    protected $casts = [
        'value_kind' => FieldValueKind::class,
    ];

    protected $fillable = ['question', 'value_kind'];


}
