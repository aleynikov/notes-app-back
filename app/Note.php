<?php
/**
 * Created by PhpStorm.
 * User: maxim
 * Date: 11.01.19
 * Time: 20:16
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    protected $hidden = [];
}
