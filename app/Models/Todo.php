<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $table = 'todolists';

    public static $rules = array(
        'content' => 'required|max:20',
    );
}
